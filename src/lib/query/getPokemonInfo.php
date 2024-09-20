<?php

namespace Application\Model\Database;

class RequestPokemon extends SQLRequest
{
    private float $id;
    private string $pokemonName ;
    private float $type1 ;
    private ?float $type2 ;
    private float $statistiques;
    private string $img; 

    public function executeQuery(array $params = []): array
    {
        $request = "SELECT p.name, p.type_1, p.type_2, p.statistiques, p.img, p.id
        FROM `pokemon` AS p
        WHERE p.id = :pokemon_id
        ";

        $result = $this->execute($request, $params);

        $this->id = $result[0]['id'];
        $this->pokemonName = $result[0]['name'];
        $this->type1 = $result[0]['type_1'];
        $this->type2 = $result[0]['type_2'];
        $this->statistiques = $result[0]['statistiques'];
        $this->img = $result[0]['img'];

        return $result;
    }

    public function getId() : float{
        return $this->id;
    }

    public function getPokemonName() : string{
        return $this->pokemonName;
    }

    public function getType1() : float{
        return $this->type1;
    }

    public function getType2() : ?float{
        return $this->type2;
    }

    public function getStatistiques() : float{
        return $this->statistiques;
    }

    public function getPokemonImg() : string{
        return $this->img;
    }


}