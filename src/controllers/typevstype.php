<?php

include_once('src/interface/controllers.php');
include_once('src/interface/liste.php');

use Application\Interface\Controllers\Controllers;
use Application\Model\ListePokemon\ListeTypes;

class TypevstypeController implements Controllers
{
    public function index() : void
    {
        try{
            include_once('src/model/sqlRequest.php');
            include_once('src/model/liste/listeTypes.php');
            include_once('src/model/type.php');

            $listeTypes = new ListeTypes();
            $listeTypes = $listeTypes->getListe();
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }

        require('templates/typevstype.php');
    }
}