<?php
include("db.php");

$id = $_GET['id'];

/* GET BOOKING */
$booking = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM bookings WHERE id='$id'")
);

/* UPDATE STATUS */
mysqli_query($conn,
"UPDATE bookings SET status='Cancelled' WHERE id='$id'"
);

/* RESTORE SEATS */
mysqli_query($conn,
"UPDATE trains
SET available_seats = available_seats + {$booking['seat_count']}
WHERE id={$booking['train_id']}"
);

header("Location: my_bookings.php?msg=cancelled");
exit();
?>