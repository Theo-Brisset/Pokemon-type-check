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
            $row = new Type($row['type_id']);
            $this->listeTypes[] = $row;
        }
        
        return $this->listeTypes;
    }

    public function getListeTypes() : array {
        return $this->listeTypes;
    }
}