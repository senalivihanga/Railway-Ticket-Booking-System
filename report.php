<?php
include("db.php");

$result = mysqli_query($conn,
"SELECT bookings.*, users.name, trains.train_name
FROM bookings
JOIN users ON bookings.user_id = users.id
JOIN trains ON bookings.train_id = trains.id");
?>

<!DOCTYPE html>
<html>
<head>
<title>Reports</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Booking Report</h2>

<table class="table table-bordered">

<tr>
<th>User</th>
<th>Train</th>
<th>Date</th>
<th>Seats</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['train_name'] ?></td>
<td><?= $row['travel_date'] ?></td>
<td><?= $row['seat_count'] ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>