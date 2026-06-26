<?php
include("db.php");

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT bookings.*, trains.train_name, trains.source_station, trains.destination_station
FROM bookings
JOIN trains ON bookings.train_id = trains.id
WHERE bookings.id=$id")
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Ticket</title>

<style>
body { font-family: Arial; padding:20px; }
.ticket {
border:2px dashed black;
padding:20px;
width:400px;
}
</style>
</head>

<body>

<div class="ticket">

<h2>Railway Ticket</h2>

<p><b>Train:</b> <?= $data['train_name'] ?></p>
<p><b>Route:</b> <?= $data['source_station'] ?> → <?= $data['destination_station'] ?></p>
<p><b>Date:</b> <?= $data['travel_date'] ?></p>
<p><b>Seats:</b> <?= $data['seat_count'] ?></p>

<br>

<button onclick="window.print()">Print Ticket</button>

</div>

</body>
</html>