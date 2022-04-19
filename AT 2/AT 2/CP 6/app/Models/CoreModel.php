<?php 

namespace CP6\Models;


// La classe CoreModel sert de base à tous nos models. Cette classe n'est pas destinée à etre instanciée en tant que telle, mais seule à etre étendue / héritée
class CoreModel {

    // Ces propriétés sont vouées à etre implémentées par tous les models de notre applciation. On les place donc dans le coreModel afin que les models en héritent.
    // On place ces propriétés en protected afin qu'elles soient privées mais aussi utilisables par les classes enfant.
    protected $id;
    protected $updated_at;
    protected $created_at;


    // De meme pour les différentes méthodes communes à toutes nos classes !

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }


}