<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'model/Connection.php';
require 'model/User.php';
require 'model/Query.php';
require 'controller/HomepageController.php';
require 'controller/ProfileController.php';

if (!isset($_GET['user'])) {
    $controller = new HomepageController();
    $controller->fillDatabase();
} else {
    $profile = new ProfileController();
    $profile->setProfile();
}


