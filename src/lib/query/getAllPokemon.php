<?php

namespace Application\Model\Database;

include_once('src/lib/query/getAllPokemon.php');

include_once('src/model/listePokemon.php');

use Application\Model\Pokemon\Pokemon;

class ListeRequest extends SQLRequest
{
    private array $listePokemon = [];

    public function executeQuery(array $params = []): array
    {
        $request = "SELECT * FROM `pokemon`";

        $results = $this->execute($request);

        foreach($results as $row){
            $row = new Pokemon($row['id']);
            $this->listePokemon[] = $row;
        }

        return $results;

    }

    public function getListePokemon(){
        return $this->listePokemon;
    }

    

}