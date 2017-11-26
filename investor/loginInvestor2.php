<?php

//Include Database Configuration File 
include('../dbcon.php');

//Preparing Data
$username = $_POST['username'];
$password = $_POST['password'];
$records = $conn->prepare('SELECT username,password FROM table_user WHERE username = :username');
$records->bindParam(':username', $username);

//Execute Query
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

//Verifying Password with database record and user input
if(count($results)>0 && password_verify($password,$results['password']))
{
    session_start();
    //Set new session and make new cookies 
    if(!empty($_POST["remember"])) {
        setcookie ("member_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
    } else {
        if(isset($_COOKIE["member_login"])) {
            setcookie ("member_login","");
        }
        if(isset($_COOKIE["password"])) {
            setcookie ("password","");
        }
    }
    $_SESSION['username'] = $results['username'];
    header('location:investor.php');
    exit;


}   else{
    echo ("Username and Password are not found<br /><br />");
    echo ("<button onclick=\"location.href='loginInvestor.php'\">Back to Home</button> ");
    echo ("<a href='recovery.html'>Forgot Password?</a>");
}

?>