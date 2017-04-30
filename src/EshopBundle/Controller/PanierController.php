<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function PanierAction()
    {
        return $this->render('EshopBundle:Default:panier.html.twig');
    }

    public function LivraisonAction()
    {
        return $this->render('EshopBundle:Default:livraison.html.twig');
    }

    public function ValidationAction()
    {
        return $this->render('EshopBundle:Default:validation.html.twig');
    }
}
