<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Compte;

class CreateCompteController extends AbstractController
{
    /**
     * @Route("/", name="create_compte")
     */
    public function index()
    {


        extract ($_POST);
        if(isset($btn)) {
       
                $compte = new Compte();

               // var_dump($_POST);
              
                $compte->setCleRip($cleRip);
                $compte->setEtat($Etat);
                $compte->setTypecompte($typecompte);
                $compte->setDatedebut((string)$datedébut);
                $compte->setDatefin($datefin);
                $compte->setNumCmpte($numCmpte);
                $compte->setFrouverture($Frouverture);
                $compte->setSolde($Solde);
                $compte->setNumAgence((int)$numAgence);
                $compte->setAgios($Agios);
                $this->getDoctrine()->getManager()->persist($compte);
                $this->getDoctrine()->getManager()->flush();
        
                return $this->render('accueil_compte/accueilcompte.html.twig');
                }    
            }
    }


