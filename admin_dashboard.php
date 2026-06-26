<?php
include("db.php");

/* Stats */
$users = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS c FROM users"))['c'];
$trains = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS c FROM trains"))['c'];
$bookings = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS c FROM bookings"))['c'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Admin Dashboard</h2>

<div class="row mt-4">

<div class="col-md-4">
<div class="card text-center shadow">
<div class="card-body">
<h5>Total Users</h5>
<h2><?= $users ?></h2>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center shadow">
<div class="card-body">
<h5>Total Trains</h5>
<h2><?= $trains ?></h2>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center shadow">
<div class="card-body">
<h5>Total Bookings</h5>
<h2><?= $bookings ?></h2>
</div>
</div>
</div>

</div>

<br>

<a href="view_trains.php" class="btn btn-primary">Manage Trains</a>
<a href="report.php" class="btn btn-success">Reports</a>

</div>

</body>
</html>