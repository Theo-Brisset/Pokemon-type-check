<?php

include_once('src/interface/controllers.php');
include_once('src/model/versus/versusPokemon.php');

use Application\Interface\Controllers\Controllers;
use Application\Model\Pokemon\Pokemon;

class VersusPokemonController implements Controllers{


    public function index() : void {
        try{
            include_once('src/model/sqlRequest.php');
            include_once('src/model/liste/listePokemon.php');
            include_once('src/model/pokemon.php');

            $pokemon = $_POST['pokemon'];
            $pokemonVs = $_POST['vspokemon'];
            $match = new VersusPokemon($pokemon, $pokemonVs);

            $pokemon = new Pokemon($pokemon);
            $pokemonVs = new Pokemon($pokemonVs);
            

            $result = $match->getResult();
            $matchResult = $match->getAdvantage();
            $fullMatchResult = $match->getMatchResult();
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }
        
        
        require('templates/resultsPokemonvspokemon.php');
    }
}