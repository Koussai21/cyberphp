<?php
require_once('model/persoModel.php');

class PersonnagesController
{
    private $model;

    public function __construct()
    {
        $this->model = new PersonnageModel();
    }

    public function getPersos()
    {
       
        $personnages = $this->model->getPersonnages();
        include_once('view/perso.php');
    }
}
