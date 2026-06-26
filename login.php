<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<i class="bi bi-train-front fs-1 text-primary"></i>

<h3 class="mt-2">Login</h3>

<form action="authenticate.php" method="POST">

<input type="email" name="email" placeholder="Email" class="form-control mb-3" required>

<input type="password" name="password" placeholder="Password" class="form-control mb-3" required>

<button class="btn btn-primary w-100">
<i class="bi bi-box-arrow-in-right"></i> Login
</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>