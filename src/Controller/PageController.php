<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/music", name="music")
    */
    public function music(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/portfolio", name="portfolio")
    */
    public function portfolio(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/stories", name="stories")
    */
    public function stories(): Response
    {
        return $this->render('page/Stories.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/about", name="about")
    */
    public function about(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
    */
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/one_piece", name="one_piece")
    */
    public function one_piece(): Response
    {
        return $this->render('page/one_piece.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
