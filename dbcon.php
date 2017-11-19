<?php
 
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'project';
 
try {
    // http://php.net/manual/en/pdo.connections.php
    $conn = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
    // More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
    echo $e->getMessage();
    echo "<br /> error connect";
}
 
?>