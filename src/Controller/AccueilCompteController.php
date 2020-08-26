<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilCompteController extends AbstractController
{
    /**
     * @Route("/C", name="accueil_compte")
     */
    public function index()
    {
        return $this->render('accueil_compte/accueilcompte.html.twig', [
            'controller_name' => 'AccueilCompteController',
        ]);
    }
}
