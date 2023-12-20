<?php
include_once('bdd.php');

class PersonnageModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getPersonnages()
    {
        return $this->bdd->query("SELECT * FROM personnage")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPersonnageByName($nom)
    {
        // Ajout de guillemets autour de $nom pour éviter les erreurs de syntaxe SQL
        $nom = $this->bdd->quote($nom);
        
        return $this->bdd->query("SELECT * FROM personnage WHERE nom=$nom")->fetch(PDO::FETCH_ASSOC);
    }
    
}
