<body>    
    <h1>Liste des catégories</h1>
    <section>

        <ul>
            <?php $categoriesList = $viewData['categoriesList'];
            foreach($categoriesList as $currentProduct) {

                echo '<a href="/category/'.$currentProduct->getId().' ">' .$currentProduct->getName() . '<br>'; 
            }?>
        </ul>
    </section>

    <div class = "add">
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Nom de la catégorie">
            <button type="submit">Ajouter une catégorie</button>
        </form>
    </div>
</body>