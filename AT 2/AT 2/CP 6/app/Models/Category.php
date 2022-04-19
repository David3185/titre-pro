<?php

namespace CP6\Models;

use CP6\Utils\Database;
use PDO;

class Category extends CoreModel
{

    private $name;


    /**
     * Méthode permettant de récupérer toutes les catégories de la BDD
     *
     * @return array
     */
    public function findAll()
    {
        // Se connecter à la BDD
        // Database::getPDO() retourne un objet PDO qui représente la connexion à la BDD
        $pdo = Database::getPDO();

        // Ecrire une requete SQL pour récupérer toutes les catégories
        $sql = "SELECT * FROM `Category`";
        
        // On exécute la requete et on récupère le résultat
        $pdoStatement =  $pdo->query($sql);

        // On traduit le résultat sous la forme d'un tableau grace à fetchAll. Et on indique que chaque entrée du tableau doit etre instanciée depuis une classe avec PDO::FETCH_CLASS. On précise le nom de la classe en 2ème argument : Category
        $categories = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'CP6\Models\Category');

        return $categories;
    }


        /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}