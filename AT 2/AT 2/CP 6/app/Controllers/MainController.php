<?php

namespace CP6\Controllers;

use CP6\Models\Category;

class MainController
{

    public function home()
    {
        $categoryModel = new Category;
        $categoriesList = $categoryModel->findAll();


        $this->show('home', ['categoriesList' => $categoriesList]);
    }

    public function show($viewName, $viewData = [])
    {
      

        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';

    }

        /**
     * Méthode permettant de gérer une page pour nos tests
     *
     * @return void
     */
    public function test()
    {
        echo "Ceci est une page de test";

        $typeModel = new Category;
        var_dump($typeModel->findAll());
    }
}
