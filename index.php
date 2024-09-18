<?php
require_once('src/lib/database.php');
include_once('src/controllers/homepage.php');
include_once('src/controllers/typevstype.php');
include_once('src/controllers/results/getResultTypevstype.php');

use Application\Lib\Database\DataBaseConnection;

try{
    $connection = DataBaseConnection::getInstance()->getConnection();
} catch(Exception $e){
    $errorMessage = $e->getMessage();
    print_r($errorMessage);
}

define('BASE_URL', '/Pokemon-type-check');

$url = trim($_SERVER['REQUEST_URI'], '/');

$page = isset($_GET['page']) ? $_GET['page'] : 'homepage';

switch ($page) {
    case 'homepage':
        $controller = new HomepageController();
        $controller->index();
        break;

    case 'typevstype':
        $controller = new TypevstypeController();
        $controller->index();
        break;

    case 'resulttypevstype':
        $controller = new VersusTypesController();
        $controller->index();
        break;

    default:
        // Si la page demandée n'existe pas, afficher une erreur
        echo "404 Page non trouvée";
        break;
    }


?>