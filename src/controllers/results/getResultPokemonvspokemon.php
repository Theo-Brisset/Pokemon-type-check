<?php

include_once('src/interface/controllers.php');
include_once('src/model/versus/versusPokemon.php');

use Application\Interface\Controllers\Controllers;

class VersusPokemonController implements Controllers{


    public function index() : void {
        try{
            include_once('src/model/sqlRequest.php');
            include_once('src/model/liste/listePokemon.php');
            include_once('src/model/pokemon.php');

            $pokemon = $_POST['pokemon'];
            $pokemonVs = $_POST['vspokemon'];
            $result = new VersusPokemon($pokemon, $pokemonVs);
            $matchResult = $result->getMatchResult();
            $result = $result->getResult();
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }
        
        
        require('templates/resultsPokemonvspokemon.php');
    }
}