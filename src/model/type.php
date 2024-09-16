<?php

use Application\Lib\Database\RequestType;

class Type {
    private string $name ;
    private array $resistances ;
    private array $weaknesses ;
    private float $id;

    public function __construct(float $idType){      
        
        $typeInfo = new RequestType;
        $typeInfo->executeQuery([':type_id' => $idType]);

        $this->name = $typeInfo->getTypeName();
        $this->resistances = $typeInfo->getResistances();
        $this->weaknesses = $typeInfo->getWeaknesses();
    }

    public function getTypeName() : string{
        return $this->name;
    }

    public function getResistances() : array{
        return $this->resistances;
    }

    public function getWeaknesses() : array{
        return $this->weaknesses;
    }

    public function arrayToString(array $array) : string{
        $string = implode(', ', $array);

        return $string;
    }

}