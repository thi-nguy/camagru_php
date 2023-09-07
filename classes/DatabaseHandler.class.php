<?php

class DatabaseHandler
{
    private $host = "mydatabase"; // docker container's name, find it in the docker-compose.yml, or our domain if the site is online
    private $user = "php_docker"; // as in docker-compose.yml
    private $pwd = "password"; // as in docker-compose.yml
    private $dbName = "camagru_database"; // as in docker-compose.yml

    protected function connect()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
        // Create PDO connection
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
