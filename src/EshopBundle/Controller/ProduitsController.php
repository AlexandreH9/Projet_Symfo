<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function ProduitsAction()
    {
        return $this->render('EshopBundle:Default:index.html.twig');
    }

    public function ProduitPresAction()
    {
        return $this->render('EshopBundle:Default:produit.html.twig');
    }
}
