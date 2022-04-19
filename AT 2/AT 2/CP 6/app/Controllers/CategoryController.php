<?php

namespace CP6\Controllers;

use CP6\Models\Category;

class CategoryController
{

    public function categoryList()
    {


        $this->show('categories');
    }


    public function show($viewName, $viewData = [])
    {

        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';

    }


}