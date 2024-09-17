<?php

namespace Application\Model\Database;



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