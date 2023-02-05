<?php
$host = "testspacegame-server.mysql.database.azure.com";
$userName = "hgqxiiufbo";
$password = "lontflcR33JvcsyxtqTILw";
$dbName = "spacegame";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the first name from the "name" column
$sql = "SELECT name FROM table_name LIMIT 1";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row from the result set
    $row = mysqli_fetch_assoc($result);
    // Access the value of the "name" column
    $first_name = $row["name"];
    echo "<h1>First name: " . $first_name . "</h1>";
} else {
    echo "<h1>No data found</h1>";
}

// Close the database connection
mysqli_close($conn);
?>
