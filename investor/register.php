<?php

//Configuration
$password = $_POST['password'];
$password2 = $_POST['password2'];

//Check whether user inputted password is match 
if ($password != $password2) {
    echo("Error... Passwords do not match <br /><br />");
    echo("<button onclick=\"location.href='index.php'\">Back to Register</button>");
}
else{

    //Load database configuration file
    include('../dbcon.php');
    
    //Preparing Data
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phone'];
    $secretQuestion = $_POST['secret'];
    $answer = $_POST['answer'];
    $insert = $conn->prepare("INSERT INTO table_user (username, password, email, name, phoneNumber, secretQuestion, answer) VAlUES (:username, :password, :email, :name, :phoneNumber, :secretQuestion, :answer)");
    $insert->bindParam(':username', $username, PDO::PARAM_STR);
    $insert->bindParam(':password', $password, PDO::PARAM_STR);
    $insert->bindParam(':email', $email, PDO::PARAM_STR);
    $insert->bindParam(':name', $name, PDO::PARAM_STR);
    $insert->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
    $insert->bindParam(':secretQuestion', $secretQuestion, PDO::PARAM_STR);
    $insert->bindParam(':answer', $answer, PDO::PARAM_STR);

    //Execute Query
    $insert->execute();

    echo "<script> alert('Registered Successfully! You may now Log In!'); window.location = 'loginInvestor.php'; </script>";
}
?>