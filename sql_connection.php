<?php
echo "Welcome to MySQL Database Connection in PHP <br>";
// ==============CODE START======================= \\
// Ways to connect to a MySQL Database
// Method-1: MySQLi Extension {Procedural and Object Oriented}
// Method-2: PDO
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
}
echo "Connection was successful <br>";
// ==============CODE END========================== \\
?>