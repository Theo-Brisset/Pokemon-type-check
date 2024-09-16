<?php
include_once('src/lib/database.php');
include_once('src/model/type.php');
include_once('src/model/sqlRequest.php');
include_once('src/controllers/getTypeInfo.php');

use Application\Lib\Database\DataBaseConnection;




if($connection !== null){
    echo 'Je suis connecté !';
}

$type = new Type(17);

print_r($type);

// use Application\Lib\Database\RequestType;

// // Créer une instance de RequestType avec l'ID du type
// $requestType = new RequestType();

// // Exécuter la requête avec les paramètres
// $typeInfo = $requestType->executeQuery([':type_id' => 1]);

// // Afficher les résultats
// print_r($typeInfo);
