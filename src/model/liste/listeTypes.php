<?php

namespace Application\Model\ListePokemon ;

include_once('src/lib/query/getAllTypes.php');

use Application\Interface\Liste\Liste;
use Application\Model\Database\ListeTypeRequest;

class ListeTypes implements Liste{

    private array $listeTypes;

    public function __construct()
    {
        $listeRequest = new ListeTypeRequest();

        $listeRequest->executeQuery();

        $this->listeTypes = $listeRequest->getListeTypes();
    }

    public function getListe() : array{
        return $this->listeTypes;
    }
} 