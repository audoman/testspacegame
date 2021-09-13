<!DOCTYPE html>
<html>
<body>

<h1>Developer News</h1>

<label for="exampleColorInput" class="form-label">Color picker</label>
<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">

<?php echo "The Best PHP Examples"; ?>

<?php
$servername = "testspacegame-server.mysql.database.azure.com";
$username = "hgqxiiufbo";
$password = "lontflcR33JvcsyxtqTILw";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
</html> 