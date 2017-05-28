<?php 

    require 'vendor/autoload.php';
    $port = 8889;
    $username = 'root';
    $password = 'root';
    $name = 'dunnat16_campusfjerdingen';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);
    

