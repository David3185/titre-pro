<h1>Vous êtes sur la page des catégories</h1>

<section>
<h2>Liste des catégories : </h2>
<ul>
    <?php $categoriesList = $viewData['categoriesList'];
    foreach($categoriesList as $currentProduct) {
        echo '<li>' .$currentProduct->getName() . '<br>'; 
    }?>
</ul>
</section>

<form action="" method="POST">
    <input type="text" name="name" placeholder="Nom de la catégorie">
    <button type="submit">Ajouter une catégorie</button>
</form>