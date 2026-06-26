<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow">

<div class="card-header text-center">
<h3>User Registration</h3>
</div>

<div class="card-body">

<form action="register.php" method="POST">

<input type="text"
name="name"
placeholder="Full Name"
class="form-control mb-3"
required>

<input type="email"
name="email"
placeholder="Email"
class="form-control mb-3"
required>

<input type="password"
name="password"
placeholder="Password"
class="form-control mb-3"
required>

<button class="btn btn-success w-100">
Register
</button>

</form>

<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($conn,
"INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

echo "<div class='alert alert-success mt-3'>
Registration Successful
</div>";

}

?>

<a href='login.php'>
Already have an account?
</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>