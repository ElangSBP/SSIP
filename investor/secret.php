<?php

//Load database configuration file
include('../dbcon.php');

//Preparing Data
$secretQuestion = $_POST['secretQuestion'];
$answer = $_POST['answer'];
$records = $conn->prepare('SELECT secretQuestion,answer FROM table_user WHERE secretQuestion = :secretQuestion');
$records->bindParam(':secretQuestion', $secretQuestion);

//Execute Query 
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

//Check whether secret question answer match with database record
if($secretQuestion == $results['secretQuestion'] && $answer == $results['answer'])
{
    header('location:newPass.html');
    exit;
}else{
    echo "Secret Question and answer are not found<br>";
}

?>