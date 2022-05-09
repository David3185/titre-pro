<h2>Catégorie</h2>

<?php $category = $viewData['category'];

echo '<a href="/category/update/'.$category->getId().' ">' .$category->getName() . '<br>'; 
?>

<button type="submit">Supprimé cette catégorie</button>
