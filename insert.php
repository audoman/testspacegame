
<html>
<head>
   <meta http-equiv = "refresh" content = "3; url = https://testspacegame.azurewebsites.net/start.php" />
   <link href="/css/bootstrap.min.css" rel="stylesheet" > 
   <link href="/css/custom.css" rel="stylesheet" > 
   <script src="/js/bootstrap.bundle.min.js" ></script>
</head>
 
<body>


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
        echo "<div class = \"blackgb\">Loading the binarys</div>";
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
     
}

?>

</body>
</html>