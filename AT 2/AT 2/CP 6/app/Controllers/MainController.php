<?php

namespace CP6\Controllers;

use CP6\Models\Category;

class MainController extends CoreController
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

}
