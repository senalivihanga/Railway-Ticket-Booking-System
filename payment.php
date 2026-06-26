<?php
include("db.php");
$booking_id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 shadow">

<h3>Payment Gateway (Demo)</h3>

<form action="ticket_print.php" method="GET">

<input type="hidden" name="id" value="<?= $booking_id ?>">

<label>Card Number</label>
<input type="text" class="form-control mb-2" placeholder="1234 5678 9012 3456">

<label>CVV</label>
<input type="text" class="form-control mb-2">

<label>Amount</label>
<input type="text" class="form-control mb-2" value="1500 LKR" disabled>

<button class="btn btn-success w-100">
Pay & Generate Ticket
</button>

</form>

</div>

</div>

</body>
</html>