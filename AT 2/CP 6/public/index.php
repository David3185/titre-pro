<?php
// Nos pages sont maintenant gérées par un controller. On a donc besoin d'inclure son fichier dans notre point d'entrée
require_once __DIR__. '/../app/controllers/MainController.php';
require_once __DIR__. '/../app/controllers/CategoryController.php';
require_once __DIR__. '/../app/models/Category.php';


// Pour charger nos pages, on a besoin de récupérer le paramètre "page" dans l'url

// Version longue
// if(isset($_GET['page']) && !empty($_GET['page'])){
//     $pageToDisplay = $_GET['page'];
// } else {
//     $pageToDisplay = 'home';
// }

// Version avec ternaire
// $pageToDisplay = (isset($_GET['page']) && !empty($_GET['page'])) ? $_GET['page'] : 'home';

// Version encore plus courte avec l'opérateur de coalescence nulle
// https://www.php.net/manual/fr/migration70.new-features.php
$pageToDisplay = $_GET['_url'] ?? 'home';

// Pour bien gérer l'affichage de nos pages et éviter que l'utilisateur ne tombe sur une erreur, on va se faire un répertoire des pages existantes. On appelle ça les routes.
$routes = [
    // On stocke en clé le nom de la page

    '/categories' => [
        'controller' => 'CategoryController',
        'method' => 'categoryList',
    ],

    'home' => [
        'controller' => 'MainController',
        'method' => 'home',
    ],

    'home' => [
        'controller' => 'MainController',
        'method' => 'homepage',
    ],
];

// Quand l'utilisateur demande une page, on va d'abord vérifier que cette page existe dans notre routeur. On vérifie donc qu'il ya une entrée du tableau $routes qui correspond à notre paramètre GET
if(isset($routes[$pageToDisplay])){

    // On récupère les infos liées à la route courante
    $currentRoute = $routes[$pageToDisplay];
    
    // On récupère le controller à utiliser
    $controllerToUse = $currentRoute['controller'];

    // On récupère la méthode à exécuter
    $methodToUse = $currentRoute['method'];


    // Comme le controller gère l'affichage des pages, on a besoin de l'instancier pour pouvoir utiliser ses méthodes.
    $controller = new $controllerToUse;

    // On va exécuter la méthode liée à la page. Le nom de cette méthode est stocké dans la variable $methodToUse. On peut donc l'utiliser pour écrire dynamiquement la méthode à exécuter.
    $controller->$methodToUse();


}