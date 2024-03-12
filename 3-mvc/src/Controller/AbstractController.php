<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
    public function render(string $content, array $data = []): Response
    {
        global $twig;
        $content = $twig->render($content, $data);
        //var_dump($content);
        return new Response($content);
    }
}