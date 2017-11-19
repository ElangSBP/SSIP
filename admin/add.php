<html>
    <head>
        <title>Add Data</title>
    </head> 
    <body>
        <?php
        //including the database connection file
        include_once("../dbcon.php");
        $folder = "uploads/";
        $upload_image = $folder . basename($_FILES["fileToUpload"]["name"]);
        
        if(isset($_POST['Submit'])) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_image)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            }
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            
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

            //insert data to database        
            $sql = "INSERT INTO bibit(name, price, description, imagePath) VALUES(:name, :price, :description, :imagePath)";
            $query = $conn->prepare($sql);

            $query->bindparam(':name', $name);
            $query->bindparam(':price', $price);
            $query->bindparam(':description', $description);
            $query->bindparam(':imagePath', $upload_image);
            $query->execute();

            // Alternative to above bindparam and execute
            // $query->execute(array(':name' => $name, ':price' => $price));

            //display success messprice
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='admin-seeds.php'>View Result</a>";
        }
        ?>
    </body>
</html>