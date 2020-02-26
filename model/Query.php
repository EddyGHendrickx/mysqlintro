<?php


class Query
{
    private $allUsers = [];
    private $connection;
    private $userSelect = 'SELECT id,firstName,lastName,email,preferred_language  FROM students';


    public function createConnection()
    {
        $this->connection = new Connection();
        return $this->connection->openConnection();
    }


    public function createUsers()
    {
        foreach ($this->createConnection()->query($this->userSelect) as $user){
            array_push($this->allUsers, $user);
        }
    }

    public function getAllUsers()
    {
        return $this->allUsers;
    }
}
