<?php
include_once('src/model/sqlRequest.php');
include_once('src/model/listePokemon.php');
include_once('src/model/pokemon.php');
include_once('src/model/type.php');

use Application\Model\ListePokemon\ListePokemon;

try{
    $listePokemon = new ListePokemon();
    $listePokemon = $listePokemon->getListePokemon();
} catch(Exception $e){
    $errorMessage = $e->getMessage();
    print_r($errorMessage);
}


require('templates/homepage.php');