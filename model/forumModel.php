<?php
include_once('bdd.php');

Class forumModel{
    private $bdd;
    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }
    public function setThread($Sujet, $Message)
{
    try {
        $setThread = $this->bdd->prepare("INSERT INTO threads(Sujet, Message) VALUES(?, ?)");
        return $setThread->execute([$Sujet, $Message]);
    } catch (PDOException $e) {
        echo "Erreur d'insertion dans la base de données : " . $e->getMessage();
        return null;
    }
}


    public function getThread()
    {
        return $this->bdd->query("SELECT * FROM threads")->fetchAll(PDO::FETCH_ASSOC);
    }

}