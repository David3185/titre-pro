<link rel="stylesheet" href="../public/style.css">

<?php

// Inclusion des classes dont dépend notre code
require_once __DIR__.'/../vendor/autoload.php';

// On récupère le paramètre GET _url contenant le nom de la page à afficher. S'il n'existe pas, on est donc sur la homepage, qu'on matérialise par /
$pageToDisplay = $_GET['_url'] ?? '/';


// On utilise maintenant AltoRouter pour gérer nos routes, donc commence par l'instancier

$router = new AltoRouter();

// On donne à AltoRouter la partie de l'URL qui sera commune à toutes nos pages pour qu'il ne la prenne pas en compte.
// $_SERVER['BASE_URI'] contient cette valeur et est définie par le .htaccess
//$router->setBasePath($_SERVER['BASE_URI']);

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
    'POST', // On indique la méthode HTTP de la route (pour une page visitée naturellement ce sera GET)
    '/categories', // Url de la route
    // Le 3ème argument désigne la "cible" de la route, c'est à dire le code à exécuter quand on arrive sur cette route
    [
        'controller' => 'CategoryController',
        'method' => 'createCategory'
    ],
    'home-add-category'// Nom de la route (une sorte d'étiquette pour l'identifier facilement)
);

$router->map(
    'GET',
    '/categories',
    [
        'controller' => 'CategoryController',
        'method' => 'categoryList'
    ],
    'categoryList'
);

$router->map(
    'GET',
    '/category/[i:id]',
    [
        'controller' => 'CategoryController',
        'method' => 'categoryShow'
    ],
    'category-page'
);

$router->map(
    'GET',
    '/category/delete/[i:id]',
    [
        'method' => 'delete',
        'controller' => 'CategoryController'
    ],
    'category-delete'
);

$router->map(
    'GET',
    '/category/update/[i:id]',
    [
        'controller' => 'CategoryController',
        'method' => 'updateForm'
    ],
    'category-updateForm'
);

$router->map(
    'POST',
    '/category/update/[i:id]',
    [
        'controller' => 'CategoryController',
        'method' => 'updateCategory'
    ],
    'category-update'
);


// On demande à AltoRouter de vérifier si l'url demandée fait partie des routes existantes (déclarées avec map())
// $match va contenir des infos sur la route, si elle existe. Dans le cas contraire, elle contiendra false
$match = $router->match();

// Quand l'utilisateur demande une page, on va d'abord vérifier que cette page existe dans notre routeur grace à la méthode match(). 
if ($match != false) {

    // On récupère les infos liées à la route courante
    $currentRoute = $match['target'];
    
    // On récupère le controller à utiliser
    $controllerToUse = $currentRoute['controller'];

    // On récupère la méthode à exécuter
    $methodToUse = $currentRoute['method'];


    // Comme le controller gère l'affichage des pages, on a besoin de l'instancier pour pouvoir utiliser ses méthodes.
    // Comme tous nos controllers utilisent le meme namespace, on recrée le FQCN (Fully Qualifed ClassName) de la classe à charger.
    $controllerToUse = "CP6\Controllers\\" . $controllerToUse;
    
    $controller = new $controllerToUse;

    // On va exécuter la méthode liée à la page. Le nom de cette méthode est stocké dans la variable $methodToUse. On peut donc l'utiliser pour écrire dynamiquement la méthode à exécuter.
    $controller->$methodToUse($match['params']);
}