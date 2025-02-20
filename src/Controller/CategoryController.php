<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/category')]
final class CategoryController extends AbstractController
{
    #[Route(name: 'app_category_index', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
    #[Route('/patient',name: 'app_category_front', methods: ['GET'])]
    public function index2(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/listCategoryFront.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }


    #[Route('/new', name: 'app_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        
        $category = new Category();
        
        // Create the form from the CategoryType class
        $form = $this->createForm(CategoryType::class, $category);
    
        // Handle the form submission
        $form->handleRequest($request);
    
        // Check if the form is submitted and valid
        if ($form->isSubmitted()&& $form->isValid()) {
            // Validate the form data
            $formValid = $form->isValid();
    
            if ($formValid) {
                // Handle image upload
                $imageFile = $form->get('image')->getData();
                if ($imageFile) {
                    // Generate a unique filename for the uploaded image
                    $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                    
                    // Move the image to the uploads directory
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads',
                        $newFilename
                    );
    
                    // Set the image path on the category
                    $category->setImage('/uploads/' . $newFilename);
                }
    
                // Set the created date
                $category->setCreatedAt(new \DateTimeImmutable());
    
                // Persist the category entity
                $em->persist($category);
                $em->flush();
    
                // Add a success message
                $this->addFlash('success', 'Category created successfully!');
                
                // Redirect to another page after successful creation (e.g., category list)
                return $this->redirectToRoute('app_category_index'); // Change to your desired route
            } else {
                // Optionally, add a flash message for validation failure
                $this->addFlash('error', 'Please fix the form errors.');
            }
        }
    
        // Render the form in the template
        return $this->render('category/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    // #[Route('/{id}', name: 'app_category_show', methods: ['GET'])]
    // public function show(Category $category): Response
    // {
    //     return $this->render('category/show.html.twig', [
    //         'category' => $category,
    //     ]);
    // }

    #[Route('/{id}/edit', name: 'app_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/category/{id}', name: 'app_articles_by_category', methods: ['GET'])]
    public function articlesByCategory(int $id, CategoryRepository $categoryRepository, ArticleRepository $articleRepository): Response
    {
        $category = $categoryRepository->find($id);
    
        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }
    
        // Use findBy() instead of a custom repository method
        $articles = $articleRepository->findBy(['category' => $category], ['publishedAt' => 'DESC']);
    
        return $this->render('category/show.html.twig', [
            'articles' => $articles,
            'category' => $category,
            
        ]);
    }
    #[Route('/patient/category/{id}', name: 'app_articles_by_category_front', methods: ['GET'])]
    public function articlesByCategoryFront(int $id, CategoryRepository $categoryRepository, ArticleRepository $articleRepository): Response
    {
        $category = $categoryRepository->find($id);
    
        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }
    
        // Use findBy() instead of a custom repository method
        $articles = $articleRepository->findBy(['category' => $category], ['publishedAt' => 'DESC']);
    
        return $this->render('category/showFront.html.twig', [
            'articles' => $articles,
            'category' => $category,
            
        ]);
    }
    
}
