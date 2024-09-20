<?php

use Application\Model\Pokemon\Pokemon;

class VersusPokemon {

    private float $result;
    private array $matchResult = [];
    private string $advantage;

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
            
        switch(true){
            case $this->result > 0 :
                $this->advantage = "Le Pokémon " . $pokemon->getPokemonName() . " a l'avantage contre " . $pokemonVs->getPokemonName() ;
                break;

            case $this->result < 0 :
                $this->advantage = "Le Pokémon " . $pokemonVs->getPokemonName() . " a l'avantage contre " . $pokemon->getPokemonName() ;
                break;
                
            case $this->result == 0 :
                $this->advantage = "Ni le Pokémon " . $pokemon->getPokemonName() . " ni le Pokémon " . $pokemonVs->getPokemonName() . " n'a l'avantage l'un contre l'autre. C'est à qui joue le mieux !" ;
        }
            

        }

    }

    private function convertMatchResultToValue(float $matchResult): float
    {
        if (($matchResult == 2) !== false) {
            return -1;
        } elseif (($matchResult == 0.5) !== false) {
            return 1;
        }
        return 0;
    }

    public function getResult() : float{
        return $this->result;
    }

    public function getMatchResult() : array{
        return $this->matchResult;
    }

    public function getAdvantage() : string{
        return $this->advantage;
    }

}