<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/actualites", name="actualites")
     */
    public function index()
    {
        return $this->render('news/index.html.twig', [
            'pagetitle' => 'Actualités',
        ]);
    }
}
