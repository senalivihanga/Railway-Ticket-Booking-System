<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$train_id = $_GET['train_id'];

/* GET TRAIN */
$train = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM trains WHERE id='$train_id'")
);

if(!$train){
    die("Train not found");
}

$error = "";

if(isset($_POST['book'])){

    $user_id = $_SESSION['user_id'];
    $seat_count = $_POST['seat_count'];
    $travel_date = $_POST['travel_date'];

    /* VALIDATION */
    if($seat_count <= 0){
        $error = "Invalid seat count";
    }
    elseif($seat_count > $train['available_seats']){
        $error = "Not enough seats available";
    }
    else{

        /* INSERT BOOKING */
        mysqli_query($conn,
        "INSERT INTO bookings(user_id,train_id,travel_date,seat_count,status)
        VALUES('$user_id','$train_id','$travel_date','$seat_count','Confirmed')"
        );

        /* UPDATE SEATS */
        mysqli_query($conn,
        "UPDATE trains
        SET available_seats = available_seats - $seat_count
        WHERE id='$train_id'"
        );

        header("Location: my_bookings.php?msg=booked");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Ticket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 shadow">

<h3><?= $train['train_name'] ?></h3>

<p>
<b>Route:</b> <?= $train['source_station'] ?> → <?= $train['destination_station'] ?><br>
<b>Available Seats:</b> <?= $train['available_seats'] ?>
</p>

<?php if($error != "") { ?>
<div class="alert alert-danger"><?= $error ?></div>
<?php } ?>

<form method="POST">

<input type="date" name="travel_date" class="form-control mb-2" required>

<input type="number" name="seat_count" class="form-control mb-2" placeholder="Seat Count" required>

<button name="book" class="btn btn-success w-100">
Confirm Booking
</button>

</form>

</div>

</div>

</body>
</html>