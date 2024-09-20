<?php

use Application\Model\Pokemon\Pokemon;

class VersusPokemon {

    private float $result;
    private array $matchResult = [];

    public function __construct(float $pokemon, float $pokemonVs)
    {
        
        $pokemon = new Pokemon($pokemon);
        $typesPokemon[] = $pokemon->getType1();
        $typesPokemon[] = $pokemon->getType2();

        $pokemonVs = new Pokemon($pokemonVs);
        $typesPokemonVs[] = $pokemonVs->getType1();
        $typesPokemonVs[] = $pokemonVs->getType2();
        

        $this->result = 0;

        foreach($typesPokemon as $type){
            foreach($typesPokemonVs as $typeVs)
                if($type !== null && $typeVs !== null){
                    $typematch = new VersusTypes($type->getTypeId(), $typeVs->getTypeId());
                    $matchResult = $typematch->getResult();

                    $this->result += $this->convertMatchResultToValue($matchResult); 

                    $this->matchResult[] = [ 
                        'type' => $type,
                        'typeVs' => $typeVs,
                        'result' => $matchResult
                    ]; 

                }
        }

    }

    private function convertMatchResultToValue(float $matchResult): float
    {
        if (($matchResult == 2) !== false) {
            return 2.0;
        } elseif (($matchResult == -2) !== false) {
            return 0.5;
        }
        return 1;
    }

    public function getResult() : float{
        return $this->result;
    }

    public function getMatchResult() : array{
        return $this->matchResult;
    }

}