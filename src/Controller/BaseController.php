<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{

/* ROUTE : PAGE ACCUEIL */


    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('base/accueil.html.twig');
    }

/* ROUTE : PAGE A PROPOS */

    /**
     * @Route("/apropos", name="apropos")
     */
    public function apropos(): Response
    {
        return $this->render('base/apropos.html.twig');
    }

/* ROUTE : PAGE HEADER */

    public function header($ROUTE_NAME)
    {

        return $this->render('base/header.html.twig', [
            'ROUTE_NAME' => $ROUTE_NAME,
        ]);
    }


}
