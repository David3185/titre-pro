<?php

class CoreController
{


    protected function show($viewName, $viewData = [])
    {
        // Pour générer des urls dans nos templates, on a besoin de la variable $router située dans public/index.php.
        // Les fonctions étant hermétiques, on n'a pas accès à cette variable.
        // Le mot-clé global permet de casser les règles du jeu et d'aller chercher une variable déclarée ailleurs. Ce mot-clé est à utiliser avec parcimonie car il peut provoquer certains effets de bord : variables écrasées, etc
        global $router;
    
        
        // la fonction extract permet d'extraire toutes les entrées d'un tableau et de les transformer en variable portant le meme nom. Si j'ai une entrée "product" dans le tableau viewData, extract() va créer une variable $product avec le meme contenu.
        // https://www.php.net/manual/fr/function.extract.php
        extract($viewData);

        // On crée une variable qui contient la partie commune à toutes les urls (la base_uri) pour l'utiliser dans nos templates.
        $absoluteURL = $_SERVER['BASE_URI'];

     //   require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
     //   require_once __DIR__.'/../views/layout/footer.tpl.php';
    }



}