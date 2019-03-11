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
        $number = random_int(0, 100);

        return $this->render('home.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/enter-code")
     */
    public function enterCodes()
    {
        $number = random_int(0, 100);

        return $this->render('enter-code.html.twig', [
            'number' => $number,
        ]);
    }


    /**
     * @Route("/confirmation")
     */
    public function confirmation()
    {

        $number = random_int(0, 100);
        return $this->render('base.html.twig', [
            'number' => $number,
        ]);
    }
}
