<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/categories', name: 'app_categories', methods:'GET')]
    public function listeCategories(CategorieRepository $repo): Response
    {
        $categories=$repo->findAll();
        return $this->render('categorie/listeCategories.html.twig',[
            'lesCategories' => $categories,
        ]);
    }
}
