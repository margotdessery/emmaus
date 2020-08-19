<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SellsController extends AbstractController
{
    /**
     * @Route("/ventes", name="ventes")
     */
    public function index()
    {
        return $this->render('sells/index.html.twig', [
            'pagetitle' => 'Ventes',
        ]);
    }
}
