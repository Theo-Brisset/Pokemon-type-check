<?php
require_once('src/lib/database.php');

use Application\Lib\Database\DataBaseConnection;

try{
    $connection = DataBaseConnection::getInstance()->getConnection();
} catch(Exception $e){
    $errorMessage = $e->getMessage();
    print_r($errorMessage);
}

try{
    include_once('src/controllers/homepage.php');
} catch(Exception $e){
    $errorMessage = $e->getMessage();
    print_r($errorMessage);
}

?>