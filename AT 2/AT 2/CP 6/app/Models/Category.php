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
        $sql = "SELECT * FROM `Category` ORDER BY `name`";
        
        // On exécute la requete et on récupère le résultat
        $pdoStatement =  $pdo->query($sql);

        // On traduit le résultat sous la forme d'un tableau grace à fetchAll. Et on indique que chaque entrée du tableau doit etre instanciée depuis une classe avec PDO::FETCH_CLASS. On précise le nom de la classe en 2ème argument : Category
        $categories = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'CP6\Models\Category');

        return $categories;
    }

    public function add()
    {
        $pdo = Database::getPDO();

        $sql = "
            INSERT INTO `Category` (name)
            VALUES (:name)
        ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);

        $insertedRows = $pdoStatement->execute();

        // Si au moins une ligne ajoutée
        if ($insertedRows > 0) {
            // Alors on récupère l'id auto-incrémenté généré par MySQL
            $this->id = $pdo->lastInsertId();

            // On retourne VRAI car l'ajout a parfaitement fonctionné
            return true;
            // => l'interpréteur PHP sort de cette fonction car on a retourné une donnée
        }
        
        // Si on arrive ici, c'est que quelque chose n'a pas bien fonctionné => FAUX
        return false;
    }

    public function find($id)
    {
        // Se connecter à la BDD
        // Database::getPDO() retourne un objet PDO qui représente la connexion à la BDD
        $pdo = Database::getPDO();

        // Ecrire une requete SQL pour récupérer un produit d'après son ID
        $sql = "SELECT * FROM `Category`
                WHERE `id` = " . $id;
        
        // On exécute la requete et on récupère le résultat
        $pdoStatement =  $pdo->query($sql);

        // On traduit le résultat en un objet. PDO le fait pour nous à l'aide d'une nouvelle méthode : fetchObject qui transforme le résultat en un objet du type de la classe transmise en paramètre
        $category = $pdoStatement->fetchObject('CP6\Models\Category');

        return $category;

    }
    public function delete()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = Database::getPDO();


        // Ecriture de la requête de suppression
        $sql = 'DELETE FROM `Category`
                WHERE id = :id';

        // Préparation de la requete
        $pdoStatement = $pdo->prepare($sql);

        // On remplace les emplacements par leurs vraies valeurs
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);

        // On exécute et on retourne le résultat de la requete (true ou false)
        return $pdoStatement->execute();
    }

    public function update()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = Database::getPDO();


        // Ecriture de la requête préparée UPDATE
        $sql = "UPDATE Category
        SET name = :name
        WHERE id = :id";

        // On envoie la requete à PDO afin qu'il la prépare
        $pdoStatement = $pdo->prepare($sql);

        // On remplace les emplacements par leur valeur
        $pdoStatement->bindValue(':name', $this->name);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);

        // On exécute la requete et on récupère son résultat dans une variable
        
        $result = $pdoStatement->execute();
        
        // Si la requete fonctionne, $result contient true, sinon false. Et on renvoie cette valeur.
        return $result; 

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