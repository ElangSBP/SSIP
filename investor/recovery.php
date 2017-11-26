<?php

//Load Database Configuration File 
include('../dbcon.php');

//Preparing Data
$username = $_POST['username'];
$phoneNumber = $_POST['phoneNumber'];
$records = $conn->prepare('SELECT username, phoneNumber FROM table_user WHERE username = :username');
$records->bindParam(':username', $username);

//Execute Query
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

//Check whether phonenumber is linked to username and have been recorded in database 
if($phoneNumber == $results['phoneNumber'] && $username == $results['username'])
{
    header('location:secret.html');
    exit;
}
else{
    echo "Username and phone number are not found<br>";
    echo "<a href='recovery.html'>Back</a>";
}

?>