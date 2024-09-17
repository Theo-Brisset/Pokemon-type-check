<?php

namespace Application\Model\Type;

include_once('src/lib/query/getTypeInfo.php');

use Application\Model\Database\RequestType;

class Type {
    private string $name ;
    private array $resistances ;
    private array $weaknesses ;
    private float $id;
    private string $img;

    public function __construct(float $idType){      
        
        $typeInfo = new RequestType;
        $typeInfo->executeQuery([':type_id' => $idType]);

        $this->name = $typeInfo->getTypeName();
        $this->resistances = $typeInfo->getResistances();
        $this->weaknesses = $typeInfo->getWeaknesses();
        $this->id = $typeInfo->getTypeId();
        $this->img = $typeInfo->getTypeImg();
    }

    public function getTypeId() : float {
        return $this->id;
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

    public function getTypeImg() : string {
        return $this->img;
    }

    public function arrayToString(array $array) : string{
        $string = implode(', ', $array);

        return $string;
    }

}