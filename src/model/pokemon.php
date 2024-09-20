<?php

namespace Application\Model\Pokemon;

include_once('src/lib/query/getPokemonInfo.php');
include_once('src/model/type.php');

use Application\Model\Database\RequestPokemon;
use Application\Model\Type\Type;

class Pokemon {
    private float $id;
    private string $name;
    private Type $type1;
    private ?Type $type2;
    private float $statistiques;
    private string $img;

    public function __construct(float $idPokemon){
        $pokemon = new RequestPokemon($idPokemon);
        $pokemon->executeQuery([':pokemon_id' => $idPokemon]);

        $this->id = $pokemon->getId();

        $this->name = $pokemon->getPokemonName();

        $this->type1 = new Type($pokemon->getType1());

        if($pokemon->getType2() !== null){
            $this->type2 = new Type($pokemon->getType2());
        }

        $this->statistiques = $pokemon->getStatistiques();

        $this->img = $pokemon->getPokemonImg();
    }

    public function getId(){
        return $this->id;
    }

    public function getPokemonName() : string{
        return $this->name;
    }

    public function getType1() : Type{
        return $this->type1;
    }

    public function getType2() : ?Type{
        if(isset($this->type2)){
            return $this->type2;
        }
        
        return null;
    }

    public function getStatistiques() : float{
        return $this->statistiques;
    }

    public function getPokemonImg() : string{
        return $this->img;
    }

}