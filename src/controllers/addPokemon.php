<?php

include_once('src/interface/controllers.php');
include_once('src/interface/liste.php');

use Application\Interface\Controllers\Controllers;

class AddPokemonController implements Controllers{

    public function index() : void{
        try{
            include_once('src/model/sqlRequest.php');

        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }
        
        require('templates/addPokemon.php');
    }
    
}
