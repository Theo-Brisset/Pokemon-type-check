<?php

namespace Application\Model\Database;

class RequestType extends SQLRequest{
    private string $typeName ;
    private array $weaknesses = [];
    private array $resistances = [];
    private float $id;
    private string $img;

    public function executeQuery(array $params = []): array
    {
        $request = "SELECT t.type_id,
                    t.name,
                    t.image,
                    GROUP_CONCAT(DISTINCT w.weakness_name SEPARATOR ', ') AS weaknesses,
                    GROUP_CONCAT(DISTINCT r.resistance_name SEPARATOR ', ') AS resistances
                    FROM `type` AS t
                    JOIN `type_weakness` AS tw ON t.type_id = tw.id_type
                    JOIN `weakness` AS w ON tw.id_weakness = w.id
                    JOIN `type_resistance` AS tr ON t.type_id = tr.id_type
                    JOIN `resistance` AS r ON tr.id_resistance = r.id
                    WHERE t.type_id = :type_id
                    GROUP BY t.type_id;
                    ";

        $results = $this->execute($request, $params);
        

        $this->typeName = $results[0]['name'];

        foreach($results as $row){
            $this->weaknesses = array_map('trim', explode(', ', $results[0]['weaknesses']));
            $this->resistances = array_map('trim', explode(', ', $results[0]['resistances']));
        }

        $this->weaknesses = array_unique($this->weaknesses);
        $this->resistances = array_unique($this->resistances);

        $this->id = $results[0]['type_id'];

        $this->img = $results[0]['image'];

        return $results;
    }
    
    public function getTypeId() : float {
        return $this->id;
    }

    public function getTypeName() : string {
        return $this->typeName;
    }

    public function getWeaknesses() : array{
        return $this->weaknesses;
    }

    public function getTypeImg() : string {
        return $this->img;
    }

    public function getResistances() : array{
        return $this->resistances;
    }
}

