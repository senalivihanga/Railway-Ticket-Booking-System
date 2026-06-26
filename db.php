<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "railway_ticket_db";

/* Connection */
$conn = mysqli_connect($host, $user, $password, $database);

/* Check connection */
if(!$conn){
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>