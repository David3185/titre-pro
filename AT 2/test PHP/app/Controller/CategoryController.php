<?php

namespace App\Controllers;

use App\Models\Category;
use CoreController;

class CategoryController extends CoreController
{

    /**
     * Action gérant la page listant les catégories
     *
     */
    public function list()
    {

        // On a besoin de récupérer toutes les catégories
        // La méthode findAll de la class Category est une méthode ne faisant pas référence à un objet Category. C'est à dire qu'elle n'est pas pas propre à une catégorie en particulier mais utilisée plutot pour générer des objets Category.
        // Cette méthode peut donc etre passée en "static", ce qui implique qu'on n'a plus besoin d'instancier la classe pour l'utiliser.
        // Pour exécuter une méthode statique, on utilise la notation Class::méthode.
        // On a besoin d'utiliser la méthode findAll qui permet de chercher tous les  produits. On instancie donc le model Product
        $categoryModel = new Category;

        // Comme on veut tous les produits, on utilise la méthode findAll
        $categories = $categoryModel->findAll();
        
        // On affiche le template de la page et on lui transmet nos produits
        $this->show('category', ['categories' => $categories]);
    }
}