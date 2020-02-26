<?php
class Connection
{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $db;

    public function openConnection()
    {
        $this->dbhost = "localhost";
        $this->dbuser = "matthijs";
        $this->dbpass = "password";
        $this->db = "becode";

        $pdo = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->db, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }


}
