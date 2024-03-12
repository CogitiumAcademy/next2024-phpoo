<?php

use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function home(): Response
    {
        //echo 'Home';
        /*
        return new Response(
            'Page d\'accueil',
            201,
            ['content-type' => 'text2/html']
        );
        */
        return $this->render('default/home.html.twig');
    }

    public function contact(): Response
    {
        //echo 'Contact';
        return $this->render('default/contact.html.twig');
    }
}