<?php
$host = "testspacegame-server.mysql.database.azure.com";
$userName = "hgqxiiufbo";
$password = "lontflcR33JvcsyxtqTILw";
$dbName = "spacegame";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "<h1>Connected successfully</h1>";
}
?>
