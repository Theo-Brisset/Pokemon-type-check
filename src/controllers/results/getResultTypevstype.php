<?php

include_once('src/interface/controllers.php');
include_once('src/model/versus/versusTypes.php');

use Application\Interface\Controllers\Controllers;

class VersusTypesController implements Controllers{


    public function index() : void {
        try{
            include_once('src/model/sqlRequest.php');
            include_once('src/model/liste/listeTypes.php');
            include_once('src/model/type.php');

            $type1 = $_POST['type'];
            $typeVs = $_POST['vstype'];
            $result = new VersusTypes($type1, $typeVs);
            $result = $result->getResult();
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            print_r($errorMessage);
        }
        
        
        require('templates/resultsTypevstype.php');
    }
}