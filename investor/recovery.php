<?php
include('../dbcon.php');
$username = $_POST['username'];
$phoneNumber = $_POST['phoneNumber'];
$records = $conn->prepare('SELECT username, phoneNumber FROM table_user WHERE username = :username');
$records->bindParam(':username', $username);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);
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