<?php
//including the database connection file
include_once("../dbcon.php");
 
//fetching data in ascending order (latest entry first)
$result = $conn->query("SELECT * FROM bibit ORDER BY id_seeds ASC");
?>
 
<html>
    <head>

        <!--= Basic Configuration --> 
        <meta charset="UTF-8">
        <title>Seeds List</title>

        <!--= Load CSS file --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">  
        <link rel="stylesheet" href="style.css">

    </head>
 
    <body>
        <div class="table-user">
            <a href="add2.php"><div class="header">Add new data</div></a><br/><br/>

            <!--= Table Configuration --> 
            <table width='100%' border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>No</td>
                    <td>Seeds</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td style="max-width: 600px">Picture</td>
                    <td>Modify</td>
                </tr>

                <!--= Table Start -->
                <?php
                $i = 1;
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
                    $image_name = $row["imagePath"];
                    echo "<tr>"."<td>".$i."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td style='max-width: 700px; max-height: 700px;'>".$row['description']."</td>";    
                    echo "<td>"."<a href=".$image_name."><img style='cursor:pointer;' src=".$image_name." width=130 height=130/>"."</a></td>";
                    echo "<td>"."<a href=\"edit2.php?id_seeds=$row[id_seeds]\">"."edit </a>". "| " ."<a href=\"delete.php?id_seeds=$row[id_seeds]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                    $i++;
                }
                ?>
            </table>
            <!--= Table End --> 

        </div>
    </body>
</html>