<?php 

    require '../vendor/autoload.php';
    $port = 8889;
    $username = 'root';
    $password = 'root';
    $name = 'event';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);
