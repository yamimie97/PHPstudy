<?php
//Connect to the database, and execute a query
class Database{
    public $connection;

    public function __construct($config, $username ='root', $password ='Ch@n1879!!!')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';'); //example.com?host=localhost&port=3306&dbname=myapp

        $this -> connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params= []) 
    {
        $statement = $this -> connection -> prepare($query);
        $statement -> execute($params);

        return $statement;
    }
}
?>