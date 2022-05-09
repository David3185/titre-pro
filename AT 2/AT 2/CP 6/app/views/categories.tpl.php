<h1>Catégories</h1>

<section>
<h3>Liste des catégories : </h3>
<ul>
    <?php $categoriesList = $viewData['categoriesList'];
    foreach($categoriesList as $currentProduct) {

        echo '<li> <a href="/category/'.$currentProduct->getId().' ">' .$currentProduct->getName() . '<br>'; 
    }?>
</ul>
</section>

<section>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Nom de la catégorie">
        <button type="submit">Ajouter une catégorie</button>
    </form>
</section>