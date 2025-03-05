<?php

namespace App\Controller;
use App\Entity\ArticleRating;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Form\RateArticleType;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;  // <-- for logging
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

#[Route('/article')]
final class ArticleController extends AbstractController
{
    // #[Route(name: 'app_article_index', methods: ['GET'])]
    // public function index(ArticleRepository $articleRepository): Response
    // {
    //     return $this->render('article/index.html.twig', [
    //         'articles' => $articleRepository->findAll(),
    //     ]);
    // }



    #[Route('/allPr', name: 'app_article_index', methods: ['GET'])]
public function index(ArticleRepository $articleRepository, Request $request): Response
{
    $title = $request->query->get('title', '');
    $content = $request->query->get('content', '');
    $categoryName = $request->query->get('category', '');

    $articles = $articleRepository->advancedSearch($title, $content, $categoryName);

    return $this->render('article/index.html.twig', [
        'articles' => $articles,
        'searchTitle' => $title,
        'searchContent' => $content,
        'searchCategory' => $categoryName,
    ]);
}

#[Route('/article/new', name: 'app_article_new', methods: ['GET', 'POST'])]
public function new(
    Request $request,
    EntityManagerInterface $em,
    ValidatorInterface $validator,
    UserRepository $userRepository,
    MailerInterface $mailer,
    LoggerInterface $logger
): Response {
    $article = new Article();

    $form = $this->createForm(ArticleType::class, $article);
    $form->handleRequest($request);

    $errors = $validator->validate($article);
    $logger->info('Creating new article. Validation errors count: '.count($errors));

    if ($form->isSubmitted() && $form->isValid() && count($errors) === 0) {
        $mediaPath = $form->get('mediaPath')->getData();
        if ($mediaPath instanceof UploadedFile) {
            $newFileName = uniqid().'.'.$mediaPath->guessExtension();
            $uploadDir   = $this->getParameter('kernel.project_dir').'/public/uploads';

            $mediaPath->move($uploadDir, $newFileName);
            $article->setMediaPath('/uploads/'.$newFileName);

            $logger->info("Uploaded file saved as: $newFileName");
        }

        $em->persist($article);
        $em->flush();
        $logger->info('New article persisted with ID: '.$article->getId());

        // Fetch all patients
        $patients = $userRepository->findAllPatients();
        $logger->info('Found '.count($patients).' patient(s). Sending emails...');

        // Send TemplatedEmail to each patient
        foreach ($patients as $patient) {
            if (!$patient->getEmail()) {
                $logger->warning('Skipping patient with no email (User ID: '.$patient->getId().').');
                continue;
            }

            $logger->info('Sending email to '.$patient->getEmail());

            $email = (new TemplatedEmail())
                ->from('oussamagamra52@gmail.com')
                ->to($patient->getEmail())
                ->subject('A new article has been published!')
                // The path to your Twig template
                ->htmlTemplate('emails/new_article.html.twig')
                // Pass variables (article & patient) to the template
                ->context([
                    'article' => $article,
                    'patient' => $patient,
                ])
            ;

            $mailer->send($email);
        }

        $this->addFlash('success', 'Article created successfully and emails were sent!');
        return $this->redirectToRoute('app_category_index'); 
    }

    return $this->render('article/new.html.twig', [
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }

    // #[Route('/article/{id}', name: 'app_article_show', methods: ['GET'])]
    // public function show(Article $article): Response
    // {
    //     return $this->render('article/detail.html.twig', [
    //         'article' => $article,
    //     ]);
    // }



    #[Route('/article/{id}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article, EntityManagerInterface $em): Response
    {
        $ratings = $em->getRepository(ArticleRating::class)->findBy(['article' => $article]);
    
        $ratingsCount = count($ratings);
        $averageRating = 0;
        if ($ratingsCount > 0) {
            $sum = 0;
            foreach ($ratings as $r) {
                $sum += $r->getRating();
            }
            $averageRating = $sum / $ratingsCount;  
        }
    
        return $this->render('article/detail.html.twig', [
            'article' => $article,
            'averageRating' => $averageRating,
            'ratingsCount' => $ratingsCount,
        ]);
    }
    



    // #[Route('/patient/article/{id}', name: 'app_article_show_front', methods: ['GET'])]
    // public function showFront(Article $article): Response
    // {
    //     return $this->render('article/detailFront.html.twig', [
    //         'article' => $article,
    //     ]);
    // }



    #[Route('/patient/article/{id}', name: 'app_article_show_front', methods: ['GET'])]
public function showFront(Article $article, EntityManagerInterface $em): Response
{
    $ratings = $em->getRepository(ArticleRating::class)->findBy(['article' => $article]);

    $averageRating = 0;
    $ratingsCount = count($ratings);
    if ($ratingsCount > 0) {
        $sum = 0;
        foreach ($ratings as $r) {
            $sum += $r->getRating();
        }
        $averageRating = $sum / $ratingsCount;
    }

    return $this->render('article/detailFront.html.twig', [
        'article' => $article,
        'averageRating' => $averageRating,
        'ratingsCount' => $ratingsCount,
    ]);
}





#[Route('/article/{id}/rate', name: 'app_article_rate', methods: ['GET', 'POST'])]
public function rateArticle(
    int $id,
    ArticleRepository $articleRepository,
    Request $request,
    EntityManagerInterface $em
): Response {
    $article = $articleRepository->find($id);
    if (!$article) {
        throw $this->createNotFoundException('Article not found.');
    }

    $rating = new ArticleRating();
    $rating->setArticle($article);

    $form = $this->createForm(RateArticleType::class, $rating);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($rating);
        $em->flush();

        $this->addFlash('success', 'Thanks for rating this article!');

        return $this->redirectToRoute('app_article_show_front', ['id' => $id]);
    }

    return $this->render('article/rate.html.twig', [
        'article' => $article,
        'form' => $form->createView(),
    ]);
}

}
