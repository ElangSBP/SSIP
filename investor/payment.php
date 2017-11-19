<?php
// including the database connection file
include_once("../dbcon.php");
//getting id from url
$total = $_GET['total'];
?>

<link rel="stylesheet" href="../css/base.css">  
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/vendor.css"> 

<section id="intro">   

    <div class="intro-overlay"></div>	

    <div class="intro-content">
        <div class="row">

   			<div class="col-twelve">
                <center>
                    <img style="max-width: 200;" src="image/BNI.png"><br />

                    <p> Your payment is: <br />
                        <b>Rp. <?php echo $total ?></b><br />
                        Owner bank account <br />
                        <b>Naufa Nabila</b><br />
                        Account number:<br />
                        <b>123 456 7890</b><br />
                        Please send the prove of your transaction to <br />
                        <b>naufal.nabila.2008@gmail.com</b>
                    </p>
                    <a href="../index.html">home</a>
                </center>
            </div>
        </div>
    </div>
</section>
        