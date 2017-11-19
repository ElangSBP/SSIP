<?php
include('../dbcon.php');
$secretQuestion = $_POST['secretQuestion'];
$answer = $_POST['answer'];
$records = $conn->prepare('SELECT secretQuestion,answer FROM table_user WHERE secretQuestion = :secretQuestion');
$records->bindParam(':secretQuestion', $secretQuestion);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);
if($secretQuestion == $results['secretQuestion'] && $answer == $results['answer'])
{
    header('location:newPass.html');
    exit;
}else{
    echo "secretQuestion and answer are not found<br>";
}
?>