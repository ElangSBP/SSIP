<?php

    //Configuration 
	$name = $_POST['name'];
    $quantity = $_POST['quantity'];
	$price = $_POST['price'];
    $total = 0; $totalQuantity = 0;
    $location = $_POST['location'];
    
?>

<br>

<html>
    <head>

        <!--= Basic Configuration =--> 
        <meta charset="UTF-8">
        <title>Seeds List</title>

        <!--= Load CSS =--> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">  
        <link rel="stylesheet" href="../admin/style.css">

    </head>
 
    <!--= Table Start =--> 
    <body>
        <div class="table-user">
            <div class="header">Transaction</div>
            <form action="order.php" method="POST">
                <table wodth=100% border="1">
                    <tr>
                        <th>No.</th>
                        <th>Seeds</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Sum</th>
                    </tr>
                    <?php 
                    for( $i = 0; $i < count($name); $i++ )
                    { 
                        if( $quantity > 0 ) 
                        {
                            $sum[$i] = $quantity[$i] * $price[$i];
                    ?>
                    <tr>
                        <td>
                            <?php echo $i+1; ?>
                        </td>
                        <td>
                            <?php echo $name[$i]; ?>
                        </td>
                        <td>
                            <?php echo $quantity[$i]; ?>
                        </td>
                        <td>
                            <?php echo $price[$i]; ?>
                        </td>
                        <td>
                            <?php echo $sum[$i]; ?>
                        </td>
                    </tr>
                    <?php
                        } $total += $sum[$i]; $totalQuantity += $quantity[$i];
                    } ?>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total Quantity: <?php echo $totalQuantity?></th>
                        <th>Location: <?php echo $location?></th>
                        <th>Total: <?php echo $total?></th><br />
                    </tr>
                </table>
                <center>
                    <a href="../index.html">Back to home</a><br />
                    <?php echo "<a href=\"payment.php?total=$total\">Payment</a>"?>
                </center>
            </form>
        </div>
    </body>
    <!--= Table End =--> 

</html>