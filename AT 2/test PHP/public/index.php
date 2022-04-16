<?php

// Inclusion des classes dont dépend notre code
require_once __DIR__.'/../vendor/autoload.php';

// On récupère le paramètre GET _url contenant le nom de la page à afficher. S'il n'existe pas, on est donc sur la homepage, qu'on matérialise par /
$pageToDisplay = $_GET['_url'] ?? '/';


// On utilise maintenant AltoRouter pour gérer nos routes, donc commence par l'instancier

$router = new AltoRouter();

// On donne à AltoRouter la partie de l'URL qui sera commune à toutes nos pages pour qu'il ne la prenne pas en compte.
// $_SERVER['BASE_URI'] contient cette valeur et est définie par le .htaccess
$router->setBasePath($_SERVER['BASE_URI']);


// On déclare nos routes avec AltoRouter. Celui-ci nous fournit une méthode dédiée à cette création de routes.

$router->map(
    'GET', // On indique la méthode HTTP de la route (pour une page visitée naturellement ce sera GET)
    '/', // Url de la route
    // Le 3ème argument désigne la "cible" de la route, c'est à dire le code à exécuter quand on arrive sur cette route
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'home'// Nom de la route (une sorte d'étiquette pour l'identifier facilement)
);

$router->map(
    'GET', // On indique la méthode HTTP de la route (pour une page visitée naturellement ce sera GET)
    '/', // Url de la route
    // Le 3ème argument désigne la "cible" de la route, c'est à dire le code à exécuter quand on arrive sur cette route
    [
        'controller' => 'CategoryController',
        'method' => 'list'
    ],
    'list'// Nom de la route (une sorte d'étiquette pour l'identifier facilement)
);