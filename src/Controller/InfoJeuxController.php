<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoJeuxController extends AbstractController
{
    #[Route('/info/jeux', name: 'app_info_jeux')]
    public function index(): Response
    {
        return $this->render('info_jeux/index.html.twig', [
            'controller_name' => 'InfoJeuxController',
        ]);
    }
}
