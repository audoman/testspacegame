<!DOCTYPE html>
<html>
<link href="/css/bootstrap.min.css" rel="stylesheet" > 
<script src="/js/bootstrap.bundle.min.js" ></script> 

<body>

<div class="jumbotron">Developer News</div>

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
echo "<h1>Connected successfully</h1>";

$sql = "SELECT Startsaying from spacegame.start
where idStart =1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Startsaying: " . $row["Startsaying"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<a name="" id="" class="btn btn-primary" href="#" role="button">Push the button</a>



</body>
</html> 