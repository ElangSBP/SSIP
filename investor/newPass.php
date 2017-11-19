<?php
try {
    include('../dbcon.php');
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $username = $_POST['username'];
    $records = $conn->prepare('SELECT * FROM table_user WHERE username = :username');
    $records->bindParam(':username', $username);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if($username == $results['username'])
    {
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $sql = "UPDATE table_user SET password = '$password' WHERE username = '$username'"; 
        // Prepare statement 
        $stmt = $conn->prepare($sql); 
        // execute the query 
        $stmt->execute(); 
        // echo a message to say the UPDATE succeeded 
        echo $stmt->rowCount() . " records UPDATED successfully"; 
        echo "<a href='loginInvestor.php'>Login</a>";
    }else{
    echo "Username is not in the database <br />";
    }
} 
catch(PDOException $e) 
{ 
    echo $sql . "<br />" . $e->getMessage(); 
} 
$conn = null; 
?>