<?php

namespace App\Creational\Singleton;

use PDO;

final class DB
{

    private static ?DB $instance = null;
    private PDO $conn;

    private string $host = 'localhost';
    private string $user = 'root';
    private string $pass = '';
    private string $name = 'test';

    private function __construct()
    {
        $this->conn = new PDO(
            "mysql:host={$this->host};dbname={$this->name}",
            $this->user,
            $this->pass,
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            ]
        );
    }

    private function __clone()
    {

    }

    public static function getInstance(): ?DB
    {
        return !self::$instance ? ( self::$instance = new self() ) : self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->conn;
    }
}