<?php

class Category
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