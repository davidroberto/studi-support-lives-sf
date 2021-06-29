<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{

    /**
     * @Route("/{age}", name="home")
     */
    public function home(Request $request, $age)
    {
        if ($age < 18) {
            return $this->redirectToRoute('underage');
        }

        // si non j'affiche le message par défaut
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/digimon/underage", name="underage")
     */
    public function underage()
    {
        return $this->render('underage.html.twig');
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }

}
