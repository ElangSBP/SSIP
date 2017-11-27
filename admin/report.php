<?php
//Load Database Configuration File
include_once("../dbcon.php");

//fetching data in ascending order (latest entry first)
$result = $conn->query("SELECT * FROM bibit ORDER BY id_seeds ASC");

?>
<html> 
<head>

<!--= Load CSS =--> 
<link rel="stylesheet" type="text/css" href=".../chart/code/css/highcharts.css">
<link rel="stylesheet" type="text/scss" href=".../chart/code/css/highcharts.scss"> 

<!--= Load Javascript =--> 
<script src=".../chart/code/js/highcharts.js"></script> 
<script src=".../chart/code/js/highcharts-more.js"></script> 


<title>Admin Report Dashboard</title>
</head> 
<body> 

</body> 
</html> 