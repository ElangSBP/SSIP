<?php
//including the database connection file
include_once("../dbcon.php");
 
//fetching data in descending order (lastest entry first)
$result = $conn->query("SELECT * FROM bibit ORDER BY id_seeds ASC");
?>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seeds List</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
        <link rel="stylesheet" href="../admin/style.css">
    </head>
 
    <body>
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
                    include_once("../dbcon.php");
                    $query = $conn->prepare('SELECT * FROM bibit');
                    $query->bindParam(':username', $username);
                    $query->execute();
                    $subtotal= 0;
                    $i = 1;
                    while($row = $query->fetch(PDO::FETCH_ASSOC)){
                        $image_name = $row["imagePath"];
                    ?>
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
                    select location:
                    <select name="location" size="1">
                        <option value="location1">location1</option>
                        <option value="location2">location2</option>
                        <option value="location3">location3</option>
                        <option value="location4">location4</option>
                        <option value="location5">location5</option>
                    </select>
                    <input type="submit" value="Order" />
                </center>
            </form>
        </div>
    </body>
</html>