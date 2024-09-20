<?php

use Application\Interface\Controllers\Controllers;
use Application\Interface\Liste\Liste;
use Application\Model\ListePokemon\ListePokemon;

include_once('src/interface/controllers.php');
include_once('src/interface/liste.php');

class PokemonvspokemonController implements Controllers{

    public function index() : void{
        try{
            include_once('src/model/sqlRequest.php');
            include_once('src/model/pokemon.php');
            include_once('src/model/liste/listePokemon.php');

            $listePokemons = new ListePokemon();
            $listePokemons = $listePokemons->getListe();
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }

        require('templates/pokemonvspokemon.php');
    }
}