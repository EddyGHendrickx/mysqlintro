<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require 'connection.php';
$newConnection = openConnection();
$userId = $_GET['user'];
$stmt = $newConnection->prepare('SELECT * FROM students WHERE id=:id');
$stmt->execute(['id'=>$userId]);
$user = $stmt->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<body>
<form action="index.php" method="post">
    <p>First name: <?php echo $user['firstName']?></p>
    <p>Last name: <?php echo $user['lastName']?></p>
    <p>E-mail: <?php echo $user['email']?></p>
</body>
</html>