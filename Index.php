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
require_once("config.php");

$sql = "SELECT Startsaying from spacegame.start
where idStart =1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["Startsaying"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



</body>
</html> 