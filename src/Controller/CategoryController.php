<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category/search', name: 'app_category')]
    public function index(): JsonResponse
    {
        return $this->json([
            'category' => $category,
        ]);
    }
	
	/**
     * @Route("/category/{id}", name="search_category")
     */
    public function searchByGenre($id)
    {
        $client = $this->getDoctrine()->getRepository(Client::class)->findBy(['type' => $id]);
        $category = $this->getDoctrine()->getRepository(Category::class)->findBy(['id' => $id]);

        return $this->render('category/search-result.html.twig', [
            'client' => $client,
            'category' => $category,
        ]);
    }
	
}
