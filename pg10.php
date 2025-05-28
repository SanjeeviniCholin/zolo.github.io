<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ZOLO</title>
	<link
 	 rel="stylesheet"
 	 href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
	<?php require('inc/links.php') ?>
	<style>
		.availability-form{
			margin-top: -50px;
			z-index: 2;
			position: relative;
		}
	</style>
</head>
<body class="bg-light">
	
<?php require('inc/header.php')?>
	
	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">THE FERN PG</h2>
		<div class="h-line bg-dark"></div>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-3 px-0">
				<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
					<div class="container-fluid flex-lg-column align-items-stretch">
						<h4 class="mt-2">FILTERS</h4>
						<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
							<div class="border bg-light p-3 rounded mb-3">
								<h5 class="mb-3" style="font-size: 18px">Check Availability</h5>
								<label class="form-label">Book-Bed</label>
								<input type="date" class="form-control shadow-none mb-3">
								<label class="form-label">Vacant-Bed</label>
								<input type="date" class="form-control shadow-none">
							</div>
							<div class="border bg-light p-3 rounded mb-3">
								<h5 class="mb-3" style="font-size: 18px">Sharing</h5>
								<div class="mb-2">
								<input type="radio" id="s1" class="form-check-input shadow-none me-1" name="sharing">
								<label class="form-check-label" for="s1">One</label><br>
								<input type="radio" id="s2" class="form-check-input shadow-none me-1" name="sharing">
								<label class="form-check-label" for="s2">Two</label><br>
								<input type="radio" id="s3" class="form-check-input shadow-none me-1" name="sharing">
								<label class="form-check-label" for="s3">Three</label><br>
								<input type="radio" id="s4" class="form-check-input shadow-none me-1" name="sharing">
								<label class="form-check-label" for="s4">Four</label><br>
								<input type="radio" id="s5" class="form-check-input shadow-none me-1" name="sharing">
								<label class="form-check-label" for="s5">Five</label>
								</div>
							</div>
						</div>
						<h4 class="mt-3">SERVICES</h4>
						<div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
							<div class="border bg-light p-3 rounded mb-3">
								<h5 class="mb-3" style="font-size: 18px">Transportation</h5>
								<label class="form-label">Source</label>
								<input class="form-control shadow-none mb-3" type="text" placeholder="Location" aria-label="Search">
								<label class="form-label">Destination</label>
								<input class="form-control shadow-none mb-3" type="text" value="WJ86+9W6, BTM 2nd Stage, Kuvempu Nagar, BTM 2nd Stage, BTM Layout, Bengaluru, Karnataka 560076" placeholder="Location">
								<label class="form-label">Booking-Date</label>
								<input type="date" class="form-control shadow-none mb-3">
								<a href="#" class="btn btn-sm w-50 text-white custom-bg shadow-none mb-2 mt-1" style="float: right;">Book Now</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
			

			<div class="col-lg-9 px-4">
				
				<div class="card mb-4 border-0 shadow">
					<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0">
						<img src="images/malnadmen/6.jpg" class="img-fluid rounded" width=400px>
						</div>
						<div class="col-md-5 px-lg-3">
							<h5 class="mb-3" style="font-weight: bold;">Room No- 101</h5>
							<div class="Features mb-3">
								<h6 class="mb-1">Features</h6>
								<span class="badge bg-light text-dark text-wrap">
									1 Room
								</span>
								<span class="badge bg-light text-dark text-wrap">
									1 Bed
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Attached Bathroom
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Balcony
								</span>
							</div>
							<div class="Facilities mb-3">
								<h6 class="mb-1">Facilities</h6>
								<span class="badge bg-light text-dark text-wrap">
									Wifi
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Television
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Laundry
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Refrigerator
								</span>
							</div>
							<div class="sharing">
								<h6 class="mb-1">Paying Guest</h6>
								<span class="badge bg-light text-dark text-wrap">
									One
								</span>
							</div>
						</div>
						<div class="col-md-2 text-align-center">
							<h6 class="mb-1">₹30000/- Monthly</h6>
							<p class="mb-3" style="font-size: 12px;">3 Meals included</p>
							<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
							<a href="360/mal5.php" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">360' View</a>
						</div>
					</div>
				</div>
				<div class="card mb-4 border-0 shadow">
					<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0">
						<img src="images/malnadmen/16.jpg" class="img-fluid rounded" width=400px>
						</div>
						<div class="col-md-5 px-lg-3">
							<h5 class="mb-3" style="font-weight: bold;">Room No- 102</h5>
							<div class="Features mb-3">
								<h6 class="mb-1">Features</h6>
								<span class="badge bg-light text-dark text-wrap">
									2 Room
								</span>
								<span class="badge bg-light text-dark text-wrap">
									2 Bed
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Attached Bathroom
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Balcony
								</span>
							</div>
							<div class="Facilities mb-3">
								<h6 class="mb-1">Facilities</h6>
								<span class="badge bg-light text-dark text-wrap">
									Wifi
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Television
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Laundry
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Refrigerator
								</span>
							</div>
							<div class="sharing">
								<h6 class="mb-1">Paying Guest</h6>
								<span class="badge bg-light text-dark text-wrap">
									Two
								</span>
							</div>
						</div>
						<div class="col-md-2 text-align-center">
							<h6 class="mb-1">₹25000/- Monthly</h6>
							<p class="mb-3" style="font-size: 12px;">3 Meals included</p>
							<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
							<a href="360/mal2.php" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">360' View</a>
						</div>
					</div>
				</div>
				<div class="card mb-4 border-0 shadow">
					<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0">
						<img src="images/malnadmen/16.png" class="img-fluid rounded" width=400px>
						</div>
						<div class="col-md-5 px-lg-3">
							<h5 class="mb-3" style="font-weight: bold;">Room No- 103</h5>
							<div class="Features mb-3">
								<h6 class="mb-1">Features</h6>
								<span class="badge bg-light text-dark text-wrap">
									3 Room
								</span>
								<span class="badge bg-light text-dark text-wrap">
									3 Bed
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Attached Bathroom
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Balcony
								</span>
							</div>
							<div class="Facilities mb-3">
								<h6 class="mb-1">Facilities</h6>
								<span class="badge bg-light text-dark text-wrap">
									Wifi
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Television
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Laundry
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Refrigerator
								</span>
							</div>
							<div class="sharing">
								<h6 class="mb-1">Paying Guest</h6>
								<span class="badge bg-light text-dark text-wrap">
									Three
								</span>
							</div>
						</div>
						<div class="col-md-2 text-align-center">
							<h6 class="mb-1">₹23000/- Monthly</h6>
							<p class="mb-3" style="font-size: 12px;">3 Meals included</p>
							<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
							<a href="360/mal3.php" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">360' View</a>
						</div>
					</div>
				</div>
				<div class="card mb-4 border-0 shadow">
					<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0">
						<img src="images/malnadmen/9.png" class="img-fluid rounded" width=400px>
						</div>
						<div class="col-md-5 px-lg-3">
							<h5 class="mb-3" style="font-weight: bold;">Room No- 104</h5>
							<div class="Features mb-3">
								<h6 class="mb-1">Features</h6>
								<span class="badge bg-light text-dark text-wrap">
									3 Room
								</span>
								<span class="badge bg-light text-dark text-wrap">
									4 Bed
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Attached Bathroom
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Balcony
								</span>
							</div>
							<div class="Facilities mb-3">
								<h6 class="mb-1">Facilities</h6>
								<span class="badge bg-light text-dark text-wrap">
									Wifi
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Television
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Laundry
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Refrigerator
								</span>
							</div>
							<div class="sharing">
								<h6 class="mb-1">Paying Guest</h6>
								<span class="badge bg-light text-dark text-wrap">
									Four
								</span>
							</div>
						</div>
						<div class="col-md-2 text-align-center">
							<h6 class="mb-1">₹22000/- Monthly</h6>
							<p class="mb-3" style="font-size: 12px;">3 Meals included</p>
							<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
							<a href="360/mal2.php" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">360' View</a>
						</div>
					</div>
				</div>
				<div class="card mb-4 border-0 shadow">
					<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0">
						<img src="images/malnadmen/10.jpg" class="img-fluid rounded" width=400px>
						</div>
						<div class="col-md-5 px-lg-3">
							<h5 class="mb-3" style="font-weight: bold;">Room No- 105</h5>
							<div class="Features mb-3">
								<h6 class="mb-1">Features</h6>
								<span class="badge bg-light text-dark text-wrap">
									3 Room
								</span>
								<span class="badge bg-light text-dark text-wrap">
									5 Bed
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Attached Bathroom
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Balcony
								</span>
							</div>
							<div class="Facilities mb-3">
								<h6 class="mb-1">Facilities</h6>
								<span class="badge bg-light text-dark text-wrap">
									Wifi
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Television
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Laundry
								</span>
								<span class="badge bg-light text-dark text-wrap">
									Refrigerator
								</span>
							</div>
							<div class="sharing">
								<h6 class="mb-1">Paying Guest</h6>
								<span class="badge bg-light text-dark text-wrap">
									Five
								</span>
							</div>
						</div>
						<div class="col-md-2 text-align-center">
							<h6 class="mb-1">₹20000/- Monthly</h6>
							<p class="mb-3" style="font-size: 12px;">3 Meals included</p>
							<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
							<a href="360/mal5.php" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">360' View</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	
	</div>

	

<?php require('inc/footer.php')?>
	


</body>
</html>