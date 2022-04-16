<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Category
{

private $name;

public function getName()
{
    return $this->name;
}

public function setName(string $name)
{
    $this->name = $name;
}

public function find($categoryId)
{
    // se connecter à la BDD
    $pdo = Database::getPDO();

    // écrire notre requête
    $sql = 'SELECT * FROM `category` WHERE `id` =' . $categoryId;

    // exécuter notre requête
    $pdoStatement = $pdo->query($sql);

    // un seul résultat => fetchObject
    $category = $pdoStatement->fetchObject('App\Models\Category');

    // retourner le résultat
    return $category;
}

/**
 * Méthode permettant de récupérer tous les enregistrements de la table category
 * 
 * @return Category[]
 */
public function findAll()
{
    $pdo = Database::getPDO();
    $sql = 'SELECT * FROM `category`';
    $pdoStatement = $pdo->query($sql);
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Category');
    
    return $results;
}

}