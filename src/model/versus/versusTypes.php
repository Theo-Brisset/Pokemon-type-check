<?php


use Application\Model\Type\Type;

class VersusTypes {

    private string $result;

    public function __construct(float $type, float $typeVs)
    {
        $type = new Type($type);
        $weaknesses = $type->getWeaknesses();
        $resistances = $type->getResistances(); 
        var_dump($weaknesses);

        $typeVs = new Type($typeVs);
        var_dump($typeVs->getTypeName());

        if(in_array($typeVs->getTypeName(), $weaknesses)){
            $this->result = 'Le type ' . $type->getTypeName() . ' reçoit double dégats par une attaque du type ' . $typeVs->getTypeName();
        } elseif(in_array($typeVs->getTypeName(), $resistances)){
            $this->result = 'Le type ' . $type->getTypeName() . ' reçoit la moitié des dégats par une attaque du type ' . $typeVs->getTypeName();
        } else {
            $this->result = 'Le type ' . $type->getTypeName() . ' reçoit des dégats neutre de la part du type ' . $typeVs->getTypeName();
        }

    }

    public function comparerTypes(){

    }

    public function getResult(){
        return $this->result;
    }
}