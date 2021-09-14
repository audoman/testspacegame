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