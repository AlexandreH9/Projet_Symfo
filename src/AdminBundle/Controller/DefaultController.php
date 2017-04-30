<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function IndexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    public function AddAction()
    {
        return $this->render('AdminBundle:Produit:add.html.twig');
    }

    public function ListAction()
    {
        return $this->render('AdminBundle:Produit:list.html.twig');
    }

    public function DeleteAction()
    {
        return $this->render('AdminBundle:Produit:delete.html.twig');
    }
}
