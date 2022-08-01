<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SophieController extends AbstractController
{
    #[Route('/sophie', name: 'app_sophie')]
    public function index(): Response
    {
        return $this->render('sophie/index.html.twig', [
            'controller_name' => 'SophieController',
        ]);
    }

    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('sophie/index.html.twig', [
            'controller_name' => 'SophieController',
        ]);
    }
}
