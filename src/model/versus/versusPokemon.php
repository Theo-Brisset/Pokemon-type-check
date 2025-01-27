<?php

use Application\Model\Pokemon\Pokemon;

class VersusPokemon {

    private float $result;
    private array $matchResult = [];
    private string $advantage;
    public string $pokemonSituation;
    public string $pokemonVsSituation;

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
        

        $this->whichHasAdvantage($pokemon, $pokemonVs);

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

    private function whichHasAdvantage(Pokemon $pokemon, Pokemon $pokemonVs){
        switch(true){
            case $this->result > 0 :
                $this->pokemonSituation = 'winner';
                $this->pokemonVsSituation = 'loser';
                $this->advantage = $pokemon->getPokemonName() . " has the advantage against " . $pokemonVs->getPokemonName() ;
                break;

            case $this->result < 0 :
                $this->pokemonSituation = 'loser';
                $this->pokemonVsSituation = 'winner';
                $this->advantage = $pokemonVs->getPokemonName() . " has the advantage against " . $pokemon->getPokemonName() ;
                break;
                
            case $this->result == 0 :
                $this->pokemonSituation = 'draw';
                $this->pokemonVsSituation = 'draw';
                $this->advantage = "Neither " . $pokemon->getPokemonName() . " nor " . $pokemonVs->getPokemonName() . " has the avdantage. It's a skill-based match-up !" ;
        }
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