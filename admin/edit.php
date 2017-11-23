<html>
    <head>
        <title>Edit Data</title>
    </head> 
    <body>
        <?php
        //load database configuration file
        include_once("../dbcon.php");
        
        //catch the data from input into variable
        $id_seeds = $_GET['id_seeds'];
        
        if(isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            
        // empty check
        } if(empty($name) || empty($price) ) {
                
            if(empty($name)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }
        
            if(empty($price)) {
                echo "<font color='red'>Price field is empty.</font><br/>";
            }
        
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        
        } else {
            
            // if all the fields are filled (not empty) 

            // update data in the database        
            $sql = "UPDATE bibit SET name=:name, price=:price, description=:description WHERE id_seeds=:id_seeds";
            $query = $conn->prepare($sql);

            $query->bindparam(':name', $name);
            $query->bindparam(':price', $price);
            $query->bindparam(':description', $description);
            $query->bindparam(':id_seeds', $id_seeds);
            $query->execute();

            // Alternative to above bindparam and execute
            // $query->execute(array(':name' => $name, ':price' => $price));

            //display success notification
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='admin-seeds.php'>View Result</a>";
        }
        ?>
    </body>
</html>