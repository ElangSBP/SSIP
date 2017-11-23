<?php

//Database Configuration
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'project';
 
try {
    // http://php.net/manual/en/pdo.connections.php
    $conn = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);

    // Setting Error Mode as Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
    // Catch the error and warn the user if they got error 
    
} catch(PDOException $e) {
    echo $e->getMessage();
    echo "<br /> error connect";
}
 
?>