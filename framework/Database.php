<?php
namespace Framework;
Use PDO;

class Database 
{
    private $connection;
    private $statement;

    public function __construct()
    {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=%s', 
        config('host'),
        config('database'),
        config('charset')
        );
        
        $this->connection = new PDO($dsn, config('username'), config('password'), config('options'));
    }

    public function query($sql, $params = [])
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function firstOrFail()
    {
        $result = $this->statement->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            exit('404 Not Found');
        }
        return $result;
    }

    public function first()
    {
        return $this->statement->fetch();
    }
}