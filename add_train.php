<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$train_name = $_POST['train_name'];
$train_number = $_POST['train_number'];
$source = $_POST['source_station'];
$destination = $_POST['destination_station'];
$departure = $_POST['departure_time'];
$arrival = $_POST['arrival_time'];
$seats = $_POST['available_seats'];

mysqli_query($conn,
"INSERT INTO trains(train_name,train_number,source_station,destination_station,departure_time,arrival_time,available_seats)
VALUES('$train_name','$train_number','$source','$destination','$departure','$arrival','$seats')");

header("Location: view_trains.php?msg=added");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Train</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header">
<h3>Add Train</h3>
</div>

<div class="card-body">

<form method="POST">

<input type="text" name="train_name" class="form-control mb-2" placeholder="Train Name" required>

<input type="text" name="train_number" class="form-control mb-2" placeholder="Train Number" required>

<input type="text" name="source_station" class="form-control mb-2" placeholder="Source Station" required>

<input type="text" name="destination_station" class="form-control mb-2" placeholder="Destination Station" required>

<input type="time" name="departure_time" class="form-control mb-2" required>

<input type="time" name="arrival_time" class="form-control mb-2" required>

<input type="number" name="available_seats" class="form-control mb-2" placeholder="Seats" required>

<button class="btn btn-success w-100">Add Train</button>

</form>

</div>

</div>

</div>

</body>
</html>