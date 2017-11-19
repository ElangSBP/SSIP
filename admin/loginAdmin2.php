<?php
include("../dbcon.php");
$username = $_POST['username'];
$password = $_POST['password'];
$records = $conn->prepare('SELECT username,password FROM table_admin WHERE username = :username');
$records->bindParam(':username', $username);
$records->execute();
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