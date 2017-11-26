<?php
//Include Database Configuration File
include_once("../dbcon.php");
 
//fetching data in ascending order (latest entry first)
$result = $conn->query("SELECT * FROM bibit ORDER BY id_seeds ASC");
?>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seeds List</title>
        <!--= Load CSS =--> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
        <link rel="stylesheet" href="../admin/style.css">
    </head>
 
    <body>
    <!--= Table Begin =-->
        <div class="table-user">
            <div class="header">Choose Product</div>
            <form action="order.php" method="POST">
                <table wodth=100% border="1">
                    <tr>
                        <th>No</th>
                        <th>Seeds name</th>
                        <th>Photo</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <?php

                    //Include Database Configuration File
                    include_once("../dbcon.php");

                    //Preparing Data
                    $query = $conn->prepare('SELECT * FROM bibit');
                    $query->bindParam(':username', $username);

                    //Execute Query
                    $query->execute();
                    $subtotal= 0;
                    $i = 1;

                    //Upload Image and save it ti $image_name variable
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $image_name = $row["imagePath"];
                    ?>

                    <!--= Show Data -->
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['name']?><input type="hidden" name="name[]" value="<?php echo $row['name']?>"></td>
                        <td><a href=../admin/<?php echo $image_name ?>>
                            <?php echo "<img style='cursor:pointer;' src=../admin/".$image_name." width=100 height=100/>";?>
                            </a>
                        </td>
                        <td><input type="number" name="quantity[]" value="0"></td>
                        <td><?php echo $row['price']?><input type="hidden" name="price[]" value="<?php echo $row['price']?>"></td>
                    </tr>
                    <?php
                        $i++;
                    }
                    ?>

                </table>

                <center>
                 <!--= Select Location =-->
                    Select Popular Location:
                    <select name="location" size="1">
                        <option value="location1">Kebun Raya Bogor</option>
                        <option value="location2">Jababeka Education Park</option>
                        <option value="location3">Tangkuban Perahu</option>
                        <option value="location4">Borneo Forest</option>
                        <option value="location5">IS Academy</option>
                    </select>

                <!--= Maps =-->
                    <div class="maps"> 
                    <a href="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyBMImEiAycsrj_2d4gAEFTCl9gL6JZloKk"> 
                    </div>

                <!--= End Select Location =--> 
                    <input type="submit" value="Order" />
                </center>
            </form>
        </div>
        <!--= Table End =-->
    </body>
</html>