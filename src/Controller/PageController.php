<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $age=20;
        $countries=["india","sri lanka"];
        return $this->render('page/index.html.twig', [
            'age' => $age,
            'countries' => $countries,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $price=100;
        return $this->render('page/about.html.twig', [
            'price' => $price,
        ]);
    }
}

