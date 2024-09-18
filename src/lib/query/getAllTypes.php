<?php

namespace Application\Model\Database ;

use Application\Model\Type\Type;

class ListeTypeRequest extends SQLRequest{
 
    private array $listeTypes = [];

    public function executeQuery(array $params = []): array
    {
        $request = "SELECT * FROM `type`";

        $results = $this->execute($request);

        foreach($results as $row){
            $row = new Type($row['id']);
            $this->listeTypes[] = $row;
        }

        return $results;
    }

    public function getListeTypes() : array {
        return $this->listeTypes;
    }
}