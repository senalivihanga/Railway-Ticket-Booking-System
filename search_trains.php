<?php
include("db.php");

$result = null;

if(isset($_GET['source'])){

$source = $_GET['source'];
$destination = $_GET['destination'];

$result = mysqli_query($conn,
"SELECT * FROM trains WHERE source_station='$source' AND destination_station='$destination'");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Trains</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2><i class="bi bi-search"></i> Search Trains</h2>

<form class="card p-3 mb-4">

<input type="text" name="source" class="form-control mb-2" placeholder="From">

<input type="text" name="destination" class="form-control mb-2" placeholder="To">

<button class="btn btn-primary">
<i class="bi bi-search"></i> Search
</button>

</form>

<?php if($result){ ?>

<table class="table table-bordered">

<tr>
<th>Train</th>
<th>Route</th>
<th>Seats</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?= $row['train_name'] ?></td>
<td><?= $row['source_station'] ?> → <?= $row['destination_station'] ?></td>
<td><?= $row['available_seats'] ?></td>

<td>
<a href="book_ticket.php?train_id=<?= $row['id'] ?>"
class="btn btn-success btn-sm">
<i class="bi bi-ticket-perforated"></i> Book
</a>
</td>
</tr>

<?php } ?>

</table>

<?php } ?>

</div>

</body>
</html>