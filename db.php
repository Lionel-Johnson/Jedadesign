<?php

$servername = "localhost";
$username = "d22343450_rosy";
$password = "@Rosy2024";
$db = "id22343450_jeda_design";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
