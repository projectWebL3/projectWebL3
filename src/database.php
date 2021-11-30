<?php
namespace App;

abstract class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=coach;charset=utf8';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    private $connection;

    public function getConnection(): \PDO
    {
        try {
            $connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $connection;
        } catch(\Exception $exception) {
            die ('Connection error : '.$exception->getMessage());
        }
    }

    private function checkConnection(): \PDO
    {
        if (null === $this->connection) {
            return $this->getConnection();
        }
        return $this->connection;
    }
    protected function createQuery(string $sql, array $parameters = []): \PDOStatement
    {
        if (empty($parameters)) {
            $result = $this->checkConnection()->query($sql);
            return $result;
        }
        $result = $this->checkConnection()->prepare($sql);
        //$result->setFetchMode(\PDO::FETCH_CLASS, static::class);
        $result->execute($parameters);
        return $result;
    }




   
}