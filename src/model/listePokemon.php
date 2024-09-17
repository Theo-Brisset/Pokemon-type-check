<?php

namespace Application\Model\ListePokemon;

include_once('src/lib/query/getAllPokemon.php');


use Application\Model\Database\ListeRequest;

class ListePokemon{

    private array $listePokemon;

    public function __construct()
    {
        $listeRequest = new ListeRequest() ;

        $listeRequest->executeQuery();

        $this->listePokemon = $listeRequest->getListePokemon();

    }

    public function getListePokemon(){
        return $this->listePokemon;
    }

    // public function displayListePokemon() {
       
    //     $listePokemon = $this->getListePokemon();

    //     foreach($listePokemon as $pokemon){
    //         echo '<img src=" ' . $pokemon->getPokemonImg() . '" alt="c\'est le alt"><br>' ;
    //         echo 'Name: ' . $pokemon->getPokemonName() . '<br>' ;
    //         echo 'Type 1: <img src="' . $pokemon->getType1()->getTypeImg() . '" alt="c\'est le alt"><br>' ;
    //         if($pokemon->getType2() !== null){
    //             echo 'Type 2 : <img src="' . $pokemon->getType2()->getTypeImg() . '" alt="c\'est le alt">';
    //         }
    //         echo '<br>' ;            
    //         echo 'Statistiques: ' . $pokemon->getStatistiques() . '<br>' ;
    //     }
    // }
}