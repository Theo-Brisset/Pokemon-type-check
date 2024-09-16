<?php

namespace Application\Lib\Database;

class RequestType extends SQLRequest{
    private string $typeName ;
    private array $weaknesses = [];
    private array $resistances = [];

    public function executeQuery(array $params = []): array
    {
        $request = "SELECT *
        FROM `type` AS t
        JOIN `type_weakness` AS tw ON t.id = tw.id_type
        JOIN `weakness` AS w ON tw.id_weakness = w.id
        JOIN `type_resistance` AS tr ON t.id = tr.id_type
        JOIN `resistance` AS r ON tr.id_resistance = r.id
        WHERE t.id = :type_id
        ";

        $results = $this->execute($request, $params);

        $this->typeName = $results[0]['name'];

        foreach($results as $row){
            $this->weaknesses[] = $row['weakness_name'];
            $this->resistances[] = $row['resistance_name'];
        }

        $this->weaknesses = array_unique($this->weaknesses);
        $this->resistances = array_unique($this->resistances);

        return $results;
    }
    
    public function getTypeName() : string {
        return $this->typeName;
    }

    public function getWeaknesses() : array{
        return $this->weaknesses;
    }

    public function getResistances() : array{
        return $this->resistances;
    }
}

