<?php

class Connection
{
    protected $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:dbname=teste;host=localhost', 'root', '', null);
        } catch (PDOException $erro) {
            echo ($erro->getMessage());
        }
    }

    public function getConn()
    {
        return $this->pdo;
    }
}
