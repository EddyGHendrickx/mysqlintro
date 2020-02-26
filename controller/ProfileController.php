<?php


class ProfileController
{

    public function setProfile()
    {
        $newConnection = new Connection();
        $newConnection = $newConnection->openConnection();
        $userId = $_GET['user'];
        $stmt = $newConnection->prepare('SELECT * FROM students WHERE id=:id');
        $stmt->execute([$userId]);
        $user = $stmt->fetch();

        require 'profile.php';
    }

}
