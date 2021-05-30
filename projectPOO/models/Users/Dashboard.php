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

    public function createUser($body)
    {
        $query = 'INSERT INTO users VALUES (?, ?)';

        $prepare = $this->conn->prepare($query);
        $prepare->bindParam(1, $body['nome']);
        $prepare->bindParam(2, $body['email']);
        $prepare->execute();
    }

    public function deleteUserById($id)
    {
        $query = 'DELETE FROM users WHERE id = ?';

        $prepare = $this->conn->prepare($query);
        $prepare->bindParam(1, $id);
        $prepare->execute();
    }

    public function updateUser($body)
    {
        $query = 'UPDATE users SET nome=?, email=? WHERE id = ?';

        $prepare = $this->conn->prepare($query);
        $prepare->bindParam(1, $body['nome']);
        $prepare->bindParam(2, $body['email']);
        $prepare->bindParam(3, $body['id']);
        $prepare->execute();
    }
}
