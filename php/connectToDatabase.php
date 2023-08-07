<?php
$servername = "localhost";
$username = "root";
$password = "anjan@123";
$databaseName = "medixohospital";

$connection = mysqli_connect($servername, $username, $password, $databaseName);

if (!$connection) {
    echo "Error while Connecting to " . $databaseName;
}

?>        