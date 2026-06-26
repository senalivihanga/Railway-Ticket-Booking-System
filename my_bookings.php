<?php
session_start();
include("db.php");

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn,
"SELECT bookings.*, trains.train_name
FROM bookings
JOIN trains ON bookings.train_id = trains.id
WHERE user_id='$user_id'"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Bookings</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>My Bookings</h2>

<?php if(isset($_GET['msg'])) { ?>
<div class="alert alert-success">Booking Successful</div>
<?php } ?>

<table class="table table-bordered">

<tr>
<th>Train</th>
<th>Date</th>
<th>Seats</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?= $row['train_name'] ?></td>
<td><?= $row['travel_date'] ?></td>
<td><?= $row['seat_count'] ?></td>

<td>
<?php if($row['status']=="Confirmed"){ ?>
<span class="badge bg-success">Confirmed</span>
<?php } else { ?>
<span class="badge bg-danger">Cancelled</span>
<?php } ?>
</td>

<td>
<a href="cancel_booking.php?id=<?= $row['id'] ?>"
class="btn btn-danger btn-sm">
Cancel
</a>
</td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>