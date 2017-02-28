<?php
class Connection {
    private $host, $username, $password, $db;
    public $pdo;
    public function __construct() {
        $this->host     = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->db       = 'acsbook';
        $this->connect();
    }
    function connect() {
        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]
        );
        return $this->pdo;
    }
}
