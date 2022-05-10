
<body>
  <h1>Welcome</h1>  
    <section>
    <h2>Liste des catégories : <a href="/categories">Ici</a></h2>

    <ul>
        <?php $categoriesList = $viewData['categoriesList'];
        foreach($categoriesList as $currentProduct) {
            echo '<li>' .$currentProduct->getName() . '<br>'; 
        }?>
    </ul>

    </section>
</body>