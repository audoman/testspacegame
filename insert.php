<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $charactername = $_POST['charactername'];
     $sql = "INSERT INTO users (name,email,charactername)
     VALUES ('$name','$email','$charactername')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
//Wait for 2 seconds
sleep(2);
//Redirect to the particular location
header("Location: start.php",TRUE,301);
die();
?>