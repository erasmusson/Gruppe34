<?php 

    require '../vendor/autoload.php';
    $port = 8889;
    $username = 'root';
    $password = 'root';
    $name = 'campusfjerdingen';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);
