<?php

class Bdd
{
    public static function connexion()
    {
            return new PDO("mysql:host=51.158.59.186:14301;dbname=KL",'phppex', 'Supermotdepasse!42');       
 }

}
    