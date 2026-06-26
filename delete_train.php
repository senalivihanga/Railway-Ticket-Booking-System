<?php
include("db.php");

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM trains WHERE id=$id");

header("Location: view_trains.php?msg=deleted");
?>