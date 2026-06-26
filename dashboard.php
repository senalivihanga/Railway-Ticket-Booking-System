<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
body {
    background: #f4f6f9;
    transition: 0.3s;
}

/* DARK MODE */
body.dark {
    background: #121212;
    color: white;
}

.dark .card {
    background: #1e1e1e;
    color: white;
}

.dark .sidebar {
    background: #000;
}

.dark a {
    color: white;
}

/* SIDEBAR */
.sidebar {
    height: 100vh;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background: #212529;
    padding-top: 20px;
}

.sidebar h4 {
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar a {
    padding: 15px;
    text-decoration: none;
    color: white;
    display: block;
}

.sidebar a:hover {
    background: #0d6efd;
}

/* CONTENT */
.content {
    margin-left: 260px;
    padding: 20px;
}

/* CARD */
.card-box {
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
</style>

</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

<h4>🚆 Railway System</h4>

<a href="dashboard.php"><i class="bi bi-house"></i> Dashboard</a>
<a href="search_trains.php"><i class="bi bi-search"></i> Search Trains</a>
<a href="my_bookings.php"><i class="bi bi-ticket-perforated"></i> My Bookings</a>
<a href="view_trains.php"><i class="bi bi-train-front"></i> View Trains</a>
<a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>

</div>

<!-- CONTENT -->
<div class="content">

<!-- TOP BAR -->
<div class="d-flex justify-content-between align-items-center mb-4">

<h2>Welcome <?= $_SESSION['name']; ?> 👋</h2>

<!-- DARK MODE BUTTON -->
<button onclick="toggleTheme()" class="btn btn-warning">
<i class="bi bi-moon-stars"></i> Theme
</button>

</div>

<!-- CARDS -->
<div class="row g-3">

<div class="col-md-4">
<div class="card card-box p-4 text-center">
<i class="bi bi-search fs-1 text-primary"></i>
<h5>Search Trains</h5>
<a href="search_trains.php" class="btn btn-primary btn-sm mt-2">Open</a>
</div>
</div>

<div class="col-md-4">
<div class="card card-box p-4 text-center">
<i class="bi bi-ticket-perforated fs-1 text-success"></i>
<h5>My Bookings</h5>
<a href="my_bookings.php" class="btn btn-success btn-sm mt-2">Open</a>
</div>
</div>

<div class="col-md-4">
<div class="card card-box p-4 text-center">
<i class="bi bi-train-front fs-1 text-warning"></i>
<h5>View Trains</h5>
<a href="view_trains.php" class="btn btn-warning btn-sm mt-2">Open</a>
</div>
</div>

</div>

</div>

<!-- SCRIPT -->
<script>
function toggleTheme(){
    document.body.classList.toggle("dark");

    if(document.body.classList.contains("dark")){
        localStorage.setItem("theme","dark");
    } else {
        localStorage.setItem("theme","light");
    }
}

/* load saved theme */
window.onload = function(){
    if(localStorage.getItem("theme") === "dark"){
        document.body.classList.add("dark");
    }
}
</script>

</body>
</html>