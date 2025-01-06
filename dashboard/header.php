<?php include "inc/sess.php"; ?>
<?php include "inc/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	</head>
	<body>
		<div class="container-fluid" style="background:url('../images/back.jpg'); background-size:cover">
			<div class="row p-2">
				<p class="display-3 text-center fw-bold" style="text-shadow:2px 2px #fff; color:#e1281b">
					DREAM LAKHDAATAR ESTATE PVT. LTD.
				</p>
			</div>
		</div>
		<!-- nav -->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav text-white">
					<li class="nav-item">
					    <a class="nav-link text-white active" aria-current="page" href="./">Home</a>
					</li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customers
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-white" href="add-customer.php">Add Customer</a></li>
                            <li><a class="dropdown-item text-white" href="customers.php">Customers List</a></li>
                        </ul>
					</li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bookings
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-white" href="add-booking.php">Add Booking</a></li>
                            <li><a class="dropdown-item text-white" href="#">Bookings List</a></li>
                        </ul>
					</li>
                    <li class="nav-item">
					    <a class="nav-link text-white" href="#">Report</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link text-white" href="#">Backup</a>
					</li>
                    <li class="nav-item">
					    <a class="nav-link text-white" href="logout.php">Logout</a>
					</li>
				</ul>
				</div>
			</div>
			</nav>
		<!-- end nav -->