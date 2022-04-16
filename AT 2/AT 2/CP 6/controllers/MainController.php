<?php


class MainController
{

    public function home()
    {

        $this->show('home');
    }

    public function homepage()
    {

        $categoryModel = new Category;
        $categories = $categoryModel->findAll();

        $this->show('home', ['categoriesList' => $categories]);
    }

    public function show($viewName, $viewData = [])
    {

        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';

    }

}