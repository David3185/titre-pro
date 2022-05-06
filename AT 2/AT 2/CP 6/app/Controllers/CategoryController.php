<?php

namespace CP6\Controllers;

use CP6\Models\Category;

class CategoryController extends CoreController
{

    public function categoryList()
    {
        $categoryModel = new Category;
        $categoriesList = $categoryModel->findAll();

        $this->show('/categories', ['categoriesList' => $categoriesList]);
    }


    public function createCategory()
    {
        $name = filter_input(INPUT_POST, 'name');

        $newCategory = new Category;

        $newCategory->setName($name);

                // On sauvegarde la nouvelle catégorie en BDD
                $categoryInserted = $newCategory->add();

                // Si la catégorie a bien été insérée, on redirige vers la page liste des catégories.
                if($categoryInserted) {
        
                    // Pour générer l'url, on a besoin de notre routeur
                    global $router;
        
                    // On redirige avec la fonction header
                    header('Location: '. $router->generate('home-add-category'));
                    exit;
        
                }
    }

public function categoryShow($param)
{
    $id = $param['id'];

    $categoryModel = new Category;

    $category = $categoryModel->find($id);

    $this->show('/category', ['category' => $category]);
}

public function delete($param)
{
    $id = $param['id'];

    $categoryModel = new Category;

    $category = $categoryModel->find($id);

    $deleted = $category->delete();

    if($deleted) {
        $this->show('/categories');
    }
}

public function updateCategory($param)
{
        // On commence par récupérer les valeurs inscrites dans les champs, et qui sont maintenant disponibles dans $_POST.

        $id = $param['id'];

        $name = filter_input(INPUT_POST, 'name');


        $categoryModel = new Category;

        $category = $categoryModel->find($id);
      

        $category->setName($name);


        $result = $category->update();

                        // Si la catégorie a bien été insérée, on redirige vers la page liste des catégories.
                        if($result) {
        
                            // Pour générer l'url, on a besoin de notre routeur
                            global $router;
                
                            // On redirige avec la fonction header
                            header('Location: '. $router->generate('category-updateForm') .$id);
                            exit;
                
                        }

}

public function updateForm($param)
{
    // On a besoin des infos de la catégorie à modifier afin de préremplir les champs. On va donc chercher la catégorie concernée avec la méthode find du model Category
    $id = $param['id'];
    
    $categoryModel = new Category;

    $category = $categoryModel->find($id);

    $this->show('/update', ['category' => $category]);
}

    public function show($viewName, $viewData = [])
    {

        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';

    }


}