<?php

namespace Application\Lib\Database;

abstract class SQLRequest{
    private ?\PDO $connection = null;

    public function __construct()
    {
        $this->connection = DataBaseConnection::getInstance()->getConnection();   
    }

    abstract public function executeQuery(array $params = []) : array ;

    protected function execute(string $query, array $params = []) : array {
        $stmt = $this->connection->prepare($query);

        foreach($params as $key=>$value){
            $stmt->bindParam($key, $value);
        }

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

}