<?php 

namespace App\Controllers;

use CoreController;

class MainController extends CoreController
{

    /**
     * Méthode gérant la page d'accueil
     */
    public function home()
    {
        // Délègue l'affichage à la méthode "show" du MainController
        $this->show('home');
    }



}