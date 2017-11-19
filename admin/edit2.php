<?php
// including the database connection file
include_once("../dbcon.php");
//getting id from url
$id_seeds = $_GET['id_seeds'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM bibit WHERE id_seeds=:id_seeds";
$query = $conn->prepare($sql);
$query->execute(array(':id_seeds' => $id_seeds));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
}
?>

<html>
    <head>
        <title>Edit Data</title>
    </head>

    <body>

        <div class="container">  
            <form id="contact" action="edit.php?id_seeds=<?php echo $id_seeds ?>" method="post" name="form1" enctype="multipart/form-data">
                <h3>Edit Seeds</h3>
                <h4>"Absorption in worldly affairs breeds darkness in the heart, and absorption in the affairs of the next world enkindles light in the heart." - Uthman Ibn Affan</h4>
                <table width="100%" border="0">
                    <tr> 
                        <td>
                            <fieldset>
                                <input tabindex="1" type="text" name="name" value="<?php echo $name ?>" required >
                            </fieldset>
                        </td>
                    </tr>
                    <tr> 
                        <td>
                            <fieldset>
                                <input tabindex="2" type="text" name="price" value="<?php echo $price ?>" required>
                            </fieldset></td>
                    </tr>
                    <tr>
                        <td>
                            <fieldset>
                                <input type="text" rows="4" cols="70" value="<?php echo $description?>" tabindex="3" name="description" required>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="Submit" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>