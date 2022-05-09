<h2>Modifier une catégorie</h2>

<?php $category = $viewData['category']; ?>

        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="name">Nom</label>
                <input value="<?= $category->getName() ?>" type="text"  name="name" class="form-control" id="name" placeholder="Nom de la catégorie">
            </div>
        </form>
<button type="submit">Valider</button>
        <a href="/">Accueil</a>