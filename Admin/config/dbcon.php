<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    header("Location: ../errors/dberror.php");
    die();
}
