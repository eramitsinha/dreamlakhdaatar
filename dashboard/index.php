<?php include "header.php"; ?>		
<div class="container">
	<div class="row p-3">
		<h2>Dashboard</h2>
	</div>
	
	<div class="row mt-3">
		<div class="col-6 col-md-6 col-lg-4">
			<div class="card">
				<?php
					$cstmt = $pdo->prepare("SELECT COUNT(*) from customers");
					$cstmt->execute();
					$ccount = $cstmt->fetch(PDO::FETCH_NUM);
					$customercount = $ccount[0];
				?>
				<div class="card-body">
					<h3 class="card-title text-danger"><?php echo $customercount; ?></h3>
					<h5 class="card-title">Total Customers</h5>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-6 col-lg-4">
			<div class="card">
			<?php
					$bstmt = $pdo->prepare("SELECT COUNT(*) from bookings");
					$bstmt->execute();
					$bcount = $bstmt->fetch(PDO::FETCH_NUM);
					$bookingcount = $bcount[0];
				?>
				<div class="card-body">
				<h3 class="card-title text-danger"><?php echo $bookingcount; ?></h3>
					<h5 class="card-title">Total Bookings</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>