<h1>Page d'accueil</h1>

<section>
<h2>Liste des catégories : </h2>
<ul>
    <?php $categoriesList = $viewData['categoriesList'];
    foreach($categoriesList as $currentProduct) {
        echo '<li>' .$currentProduct->getName() . '<br>'; 
    }?>
</ul>

</section>
