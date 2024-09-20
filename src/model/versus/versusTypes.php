<?php


use Application\Model\Type\Type;

class VersusTypes {

    private float $result;

    public function __construct(float $type, float $typeVs)
    {
        $type = new Type($type);
        $weaknesses = $type->getWeaknesses();
        $resistances = $type->getResistances(); 

        $typeVs = new Type($typeVs);

        if(in_array($typeVs->getTypeName(), $weaknesses)){
            $this->result = 2;
        } elseif(in_array($typeVs->getTypeName(), $resistances)){
            $this->result = 0.5;
        } else {
            $this->result = 1;
        }

    }

    public function comparerTypes(){

    }

    public function getResult(){
        return $this->result;
    }
}