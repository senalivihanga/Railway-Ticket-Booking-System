<?php
include("db.php");

$result = mysqli_query($conn,"SELECT * FROM trains");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Trains</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Train List</h2>

<a href="add_train.php" class="btn btn-primary mb-3">Add New Train</a>

<?php if(isset($_GET['msg'])) { ?>
<div class="alert alert-success">Train Added Successfully</div>
<?php } ?>

<table class="table table-bordered table-striped">

<tr>
<th>ID</th>
<th>Name</th>
<th>Number</th>
<th>Route</th>
<th>Time</th>
<th>Seats</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['train_name'] ?></td>
<td><?= $row['train_number'] ?></td>
<td><?= $row['source_station'] ?> → <?= $row['destination_station'] ?></td>
<td><?= $row['departure_time'] ?> - <?= $row['arrival_time'] ?></td>
<td><?= $row['available_seats'] ?></td>

<td>
<a href="delete_train.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Delete train?')">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>