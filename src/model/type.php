<?php

use Application\Lib\Database\RequestType;

class Type {
    private string $name ;
    private array $resistance ;
    private array $weakness ;
    private float $id;

    public function __construct(float $idType){      
        
        $typeInfo = new RequestType;
        $typeInfo->executeQuery([':type_id' => $idType]);

        $this->name = $typeInfo->getTypeName();
        $this->resistance = $typeInfo->getResistances();
        $this->weakness = $typeInfo->getWeaknesses();
    }    

}