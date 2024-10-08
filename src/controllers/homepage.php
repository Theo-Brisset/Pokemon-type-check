<?php

include_once('src/interface/controllers.php');
include_once('src/interface/liste.php');

use Application\Interface\Controllers\Controllers;
use Application\Model\ListePokemon\ListePokemon;

class HomepageController implements Controllers{

    public function index() : void{
        try{
            include_once('src/model/sqlRequest.php');
            include_once('src/model/liste/listePokemon.php');
            include_once('src/model/pokemon.php');
            include_once('src/model/type.php');

            $listePokemon = new ListePokemon();
            $listePokemon = $listePokemon->getListe();

        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }
        
        
        require('templates/homepage.php');
    }
    
}
