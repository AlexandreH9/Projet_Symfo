<?php

namespace AdminBundle\Controller;

use EshopBundle\EshopBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use EshopBundle\Entity\Produit;

class ProductController extends Controller
{
    /**
     * @Route("/produit/add", name="addProduit")
     */
    public function addProduitAction()
    {
        $em = $this->getDoctrine()->getEntityManager();


        $form = $this->createFormBuilder(new Produit())
            ->add("nom")
            ->add("description")
            ->add("prix")
            ->add("dispo")
            ->add("img")
            ->add("submit", SubmitType::class, array('label' => 'Ajouter'))
            ->getForm();

        $form->handleRequest($_REQUEST);

        if ($form->isSubmitted()) {
            $produit = $form->getData();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute("listArticles");
        }

        return $this->render('AdminBundle:Article:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/produit/list", name="listProduit")
     */
    public function listProduitAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $produits = $em->getRepository('EshopBundle:Produit')->findAll();

        return $this->render('AdminBundle:Article:list.html.twig', array('produits' => $produits));
    }


    public function listAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $articleRepo = $em->getRepository("AppBundle:Article");
        $articles = $articleRepo->findAll();

        return $this->render('AdminBundle:Article:list.html.twig', array(
            'articles' => $articles
        ));
    }
}
