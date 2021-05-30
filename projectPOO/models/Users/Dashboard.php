<?php

include '../../database/connection.php';

class DashboardModels
{
    private $conn = null;

    public function __construct()
    {
        $pdo = new Connection();

        $this->conn = $pdo->getConn();
    }

    public function getUsers()
    {
        $query = 'SELECT * FROM users';

        $prepare = $this->conn->prepare($query);
        $prepare->execute();

        $users = $prepare->fetchAll();

        return $users;
        //var_dump($users);
    }

    public function getUserById($id)
    {
        $query = 'SELECT * FROM users WHERE id LIKE ?';

        $prepare = $this->conn->prepare($query);
        $prepare->bindParam(1, $id);

        $prepare->execute();

        $user = $prepare->fetchAll();

        return $user;
    }

    public function getUsersByEmail($email)
    {
        $query = 'SELECT * FROM users WHERE email LIKE %?%';
    }
}

$test = new DashboardModels();
