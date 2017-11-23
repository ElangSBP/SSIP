<?php
// Database Configuration Load 
include("../dbcon.php");

// Pass The Data From Form Configuration
$username = $_POST['username'];
$password = $_POST['password'];

//Preparing before Executing Query
$records = $conn->prepare('SELECT username,password FROM table_admin WHERE username = :username');

//Bind the Variable 
$records->bindParam(':username', $username);

//Execute the Query
$records->execute();

//Compare the password to input data
// if the password match it will start the new session and if it fail it will give an error message
$results = $records->fetch(PDO::FETCH_ASSOC);
if(count($results)>0 && password_verify($password,$results['password']))
{
    session_start();
    $_SESSION['username'] = $results['username'];
    header('location:admin-seeds.php');
    exit;
}else{
    echo "<script> alert('Username and Password are not found') </script>";
    echo "<a href='loginAdmin.php'>Login</a>";
}
?>