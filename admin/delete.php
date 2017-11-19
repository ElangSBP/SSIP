<?php
//including the database connection file
include("../dbcon.php");
 
//getting id of the data from url
$id_seeds = $_GET['id_seeds'];
 
//deleting the row from table
$sql = "DELETE FROM bibit WHERE id_seeds=:id_seeds";
$query = $conn->prepare($sql);
$query->execute(array(':id_seeds' => $id_seeds));
 
//redirecting to the display price (admin.php in our case)
header("Location:admin-seeds.php");
?>