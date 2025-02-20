<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
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

#[Route('/article')]
final class ArticleController extends AbstractController
{
    #[Route(name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/article/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): Response
{
    $article = new Article();
     
    $form = $this->createForm(ArticleType::class, $article);

    $form->handleRequest($request);

    // Validate the form
    $errors = $validator->validate($article);

    if ($form->isSubmitted() && $form->isValid() && count($errors) === 0) {
        $mediaPath = $form->get('mediaPath')->getData();

        if ($mediaPath instanceof UploadedFile) {
            $newFileName = uniqid() . '.' . $mediaPath->guessExtension();

            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads';

            $mediaPath->move($uploadDir, $newFileName);

            $article->setMediaPath('/uploads/' . $newFileName);
        }

        $em->persist($article);
        $em->flush();

        $this->addFlash('success', 'Article created successfully!');
        return $this->redirectToRoute('app_category_index'); 
    }

    return $this->render('article/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    // #[Route('/{id}', name: 'app_article_show', methods: ['GET'])]
    // public function show(Article $article): Response
    // {
    //     return $this->render('article/show.html.twig', [
    //         'article' => $article,
    //     ]);
    // }

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
    #[Route('/article/{id}', name: 'app_article_show', methods: ['GET'])]
public function show(Article $article): Response
{
    return $this->render('article/detail.html.twig', [
        'article' => $article,
    ]);
}
#[Route('/patient/article/{id}', name: 'app_article_show_front', methods: ['GET'])]
public function showFront(Article $article): Response
{
    return $this->render('article/detailFront.html.twig', [
        'article' => $article,
    ]);
}
  
}
