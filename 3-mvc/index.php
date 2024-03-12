<?php

use Symfony\Component\HttpFoundation\Request;

require_once './vendor/autoload.php';

// Chargement de Twig sur le dossier ./templates
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

// Récupérer les infos de la Request HTTP
$request = Request::createFromGlobals();

// Fabriquer le nom du Controller demandé
$controller = !empty($request->get('controller')) ? ucfirst($request->get('controller')) . 'Controller' : 'DefaultController';

// Fabriquer le nom de l'action demandée
$action = $request->get('action') ?? 'home';

// Charger le fichier du controller demandé
spl_autoload_register(function($className) {
    require_once '.' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $className . '.php';
});

// Appelé l'action souhaitée sur le controller demandé
// et récupérer une Response HHTP contenant la vue correspondante
$response = call_user_func_array([new $controller(), $action], []);

// Envoyer la Response au navigateur 
$response->send();
