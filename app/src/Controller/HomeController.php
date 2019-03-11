<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('home.html.twig', []);
    }

    /**
     * @Route("/enter-code")
     */
    public function enterCodes()
    {
        return $this->render('enter-code.html.twig', []);
    }


    /**
     * @Route("/confirmation")
     */
    public function confirmation()
    {
        return $this->render('base.html.twig', []);
    }
}
