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

	<!--Slider-->
	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/slider/11.jpg" class="w-100 d-block" style="max-height: 400px;" >
				</div>
				<div class="swiper-slide">
					<img src="images/slider/12.jpg" class="w-100 d-block" style="max-height: 400px;" >
				</div>
				<div class="swiper-slide">
					<img src="images/slider/13.jpg" class="w-100 d-block" style="max-height: 400px;" >
				</div>
				<div class="swiper-slide">
					<img src="images/slider/14.jpg" class="w-100 d-block" style="max-height: 400px;">
				</div>
				<div class="swiper-slide">
					<img src="images/slider/15.jpg" class="w-100 d-block" style="max-height: 400px;" >
				</div>
				<div class="swiper-slide">
					<img src="images/slider/16.jpg" class="w-100 d-block" style="max-height: 400px;">
				</div>
			</div>
		</div>
	</div>

	<!--Check Availability Form-->
		<div class="container availability-form">
			<div class="row">
				<div class="col-lg-12 bg-white shadow p-4 rounded">
					<h5 class="mb-4">ACCOMMODATION</h5>
					<form>
						<div class="row align-items-end ">
							<div class="col-lg-3" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Price</label>
								<select class="form-select shadow-none">
									<option selected>Select</option>
									<option value="1">5000-10000</option>
									<option value="2">10000-20000</option>
									<option value="3">20000-30000</option>
								</select>
							</div>
							<div class="col-lg-3" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Location</label>
								<input class="form-control me-2 shadow-none" type="text" placeholder="Location" aria-label="Search">
							</div>
							<div class="col-lg-2" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Catogery</label>
								<select class="form-select shadow-none">
									<option selected>Select</option>
									<option value="1">Men</option>
									<option value="2">Women</option>
									<option value="3">Co-Living</option>
								</select>
							</div>
							<div class="col-lg-3" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Book-Bed</label>
								<input type="date" class="form-control shadow-none">
							</div>
							<div class="col-lg-3" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Vacant-Bed</label>
								<input type="date" class="form-control shadow-none">
							</div>
							<div class="col-lg-3" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Sharing</label>
								<select class="form-select shadow-none">
									<option selected>Select</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
									<option value="4">Four</option>
									<option value="5">Five</option>
								</select>
							</div>
							<div class="col-lg-2" style="padding-bottom: 15px;">
								<label class="form-label" style="font-weight: 500;">Attach Washroom</label>
								<select class="form-select shadow-none">
									<option selected>Select</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
								</select>
							</div>
							<div class="col-lg-1 mg-lg-3" style="padding-bottom: 15px;">
								<button type="submit" class="btn text-white shadow-none custom-bg">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	<!--ROOMS-->
	
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PG/ROOMS</h2>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/1.jpeg" class="card-img-top" style="max-height: 200px;">
					<div class="card-body">
					  <h5>Malnad Pg</h5>
					  <h6 class="mb-4">₹20000-₹30000/- Monthly</h6>
					 <div class="Catogery mb-3">
						<h6 class="mb-1">Catogery</h6>
						<span class="badge bg-light text-dark text-wrap">
							Men Pg
						</span>
					 </div>
					 <div class="Location mb-3">
						<h6 class="mb-1">Location</h6>
						<span class="badge bg-light text-dark text-wrap">
							Hassan, Karnataka
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
					 <div class="rating mb-3">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</span>
					 </div>
					 <div class="d-flex justify-content-evenly mb-2">
						<a href="malnadmen.php" class="btn btn-sm text-white custom1-bg shadow-none">Visit Now</a>
					 </div>
					</div>
				</div>
			</div>	
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/12.jpg" class="card-img-top" style="max-height: 200px;">
					<div class="card-body">
					  <h5>Hasanamba Pg</h5>
					  <h6 class="mb-4">₹10000-₹20000/- Monthly</h6>
					 <div class="Catogery mb-3">
						<h6 class="mb-1">Catogery</h6>
						<span class="badge bg-light text-dark text-wrap">
							Co-Living
						</span>
					 </div>
					 <div class="Location mb-3">
						<h6 class="mb-1">Location</h6>
						<span class="badge bg-light text-dark text-wrap">
							Hassan, Karnataka
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
					 <div class="rating mb-3">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-half text-warning"></i>
						</span>
					 </div>
					 <div class="d-flex justify-content-evenly mb-2">
						<a href="hasanamba.php" class="btn btn-sm text-white custom1-bg shadow-none">Visit Now</a>
					 </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/3.jpg" class="card-img-top" style="max-height: 200px;">
					<div class="card-body">
					  <h5>Dream Stays</h5>
					  <h6 class="mb-4">₹10000-₹20000/- Monthly</h6>
					 <div class="Catogery mb-3">
						<h6 class="mb-1">Catogery</h6>
						<span class="badge bg-light text-dark text-wrap">
							Women Pg
						</span>
					 </div>
					 <div class="Location mb-3">
						<h6 class="mb-1">Location</h6>
						<span class="badge bg-light text-dark text-wrap">
							Belagavi, Karnataka
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
					 <div class="rating mb-3">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-half text-warning"></i>
						</span>
					 </div>
					 <div class="d-flex justify-content-evenly mb-2">
						<a href="pg3.php" class="btn btn-sm text-white custom1-bg shadow-none">Visit Now</a>
					 </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/4.jpg" class="card-img-top" style="max-height: 200px;">
					<div class="card-body">
					  <h5>Mirashi Pg</h5>
					  <h6 class="mb-4">₹5000-₹10000/- Monthly</h6>
					 <div class="Catogery mb-3">
						<h6 class="mb-1">Catogery</h6>
						<span class="badge bg-light text-dark text-wrap">
							Men Pg
						</span>
					 </div>
					 <div class="Location mb-3">
						<h6 class="mb-1">Location</h6>
						<span class="badge bg-light text-dark text-wrap">
							Belagavi, Karnataka
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
					 <div class="rating mb-3">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</span>
					 </div>
					 <div class="d-flex justify-content-evenly mb-2">
						<a href="pg4.php" class="btn btn-sm text-white custom1-bg shadow-none">Visit Now</a>
					 </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/5.jpg" class="card-img-top" style="max-height: 200px;">
					<div class="card-body">
					  <h5>Oneness</h5>
					  <h6 class="mb-4">₹10000-₹20000/- Monthly</h6>
					 <div class="Catogery mb-3">
						<h6 class="mb-1">Catogery</h6>
						<span class="badge bg-light text-dark text-wrap">
							Women Pg
						</span>
					 </div>
					 <div class="Location mb-3">
						<h6 class="mb-1">Location</h6>
						<span class="badge bg-light text-dark text-wrap">
							Belagavi, Karnataka
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
					 <div class="rating mb-3">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</span>
					 </div>
					 <div class="d-flex justify-content-evenly mb-2">
						<a href="pg5.php" class="btn btn-sm text-white custom1-bg shadow-none">Visit Now</a>
					 </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/rooms/6.jpg" class="card-img-top" style="max-height: 200px;">
					<div class="card-body">
					  <h5>Malnad Pg</h5>
					  <h6 class="mb-4">₹5000-₹10000/- Monthly</h6>
					 <div class="Catogery mb-3">
						<h6 class="mb-1">Catogery</h6>
						<span class="badge bg-light text-dark text-wrap">
							Women Pg
						</span>
					 </div>
					 <div class="Location mb-3">
						<h6 class="mb-1">Location</h6>
						<span class="badge bg-light text-dark text-wrap">
							Hassan, Karnataka
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
					 <div class="rating mb-3">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-half text-warning"></i>
						</span>
					 </div>
					 <div class="d-flex justify-content-evenly mb-2">
						<a href="pg6.php" class="btn btn-sm text-white custom1-bg shadow-none">Visit Now</a>
					 </div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-12 text-center mt-5">
				<a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a>
			</div>
		</div>
	</div>
	
	<!--Testimonials-->

	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
	<div class="container mt-5">
		<div class="swiper swiper-testimonials">
			<div class="swiper-wrapper mb-5">
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/test/a1.jpeg" width="30px">
						<h6 class="m-0 ms-2">JOHN henry</h6>
					</div>
					<p>
						Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tellus molestie nunc non blandit massa. Congue nisi vitae suscipit tellus mauris a. Tellus orci ac auctor augue mauris augue neque.
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-half text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/test/a1.jpeg" width="30px">
						<h6 class="m-0 ms-2">JOHN henry</h6>
					</div>
					<p>
						Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tellus molestie nunc non blandit massa. Congue nisi vitae suscipit tellus mauris a. Tellus orci ac auctor augue mauris augue neque.
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-half text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/test/a1.jpeg" width="30px">
						<h6 class="m-0 ms-2">JOHN henry</h6>
					</div>
					<p>
						Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tellus molestie nunc non blandit massa. Congue nisi vitae suscipit tellus mauris a. Tellus orci ac auctor augue mauris augue neque.
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-half text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/test/a1.jpeg" width="30px">
						<h6 class="m-0 ms-2">JOHN henry</h6>
					</div>
					<p>
						Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tellus molestie nunc non blandit massa. Congue nisi vitae suscipit tellus mauris a. Tellus orci ac auctor augue mauris augue neque.
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-half text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/test/a1.jpeg" width="30px">
						<h6 class="m-0 ms-2">JOHN henry</h6>
					</div>
					<p>
						Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tellus molestie nunc non blandit massa. Congue nisi vitae suscipit tellus mauris a. Tellus orci ac auctor augue mauris augue neque.
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-half text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-3">
						<img src="images/test/a1.jpeg" width="30px">
						<h6 class="m-0 ms-2">JOHN henry</h6>
					</div>
					<p>
						Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tellus molestie nunc non blandit massa. Congue nisi vitae suscipit tellus mauris a. Tellus orci ac auctor augue mauris augue neque.
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-half text-warning"></i>
					</div>
				</div>
			</div>
		<div class="swiper-pagination"></div>
  	</div>
	
	<!--About-->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ABOUT ZOLO</h2>
	<div class="container">
		<div class="row">
			<h4 class="mt-3 mb-2" style="text-align: center;">Welcome to Zolo.in - Your Home Away from Home!</h4>
		</div>
		<div class="row m-3">
			<p style="text-align: center;">At Zolo.in, we understand that finding the perfect place to stay is crucial, whether you're a student, working professional, or anyone looking for a comfortable and convenient living arrangement. Established with the vision to simplify the search for quality paying guest accommodations, we are dedicated to connecting you with the best PG options that cater to your needs and preferences. All our PG accommodations are thoroughly verified to ensure they meet our quality and safety standards. We are trusted online platform specializing in listing and managing paying guest accommodations across major cities in India. Our extensive database includes a diverse range of PGs, from budget-friendly options to premium stays, ensuring that there is something for everyone. We pride ourselves on offering verified listings, transparent pricing, and comprehensive details to help you make informed decisions.</p>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="bg-white p-4 rounded mb-4" style="height: 130px;">
					<h5>Address</h5>
					<i class="bi bi-geo-alt-fill"></i>
					No 21, Salagame Rd, Rangoli Halla, Hassan, Chikkakondagola, Karnataka 573202
				</div>
			</div>
			<div class="col-lg-4">
				<div class="bg-white p-4 rounded mb-4"  style="height: 130px;">
					<h5>Contact us</h5>
					<a href="tel: +917020464064" class="d-inline-block mb-2 text-decoration-none text-dark">
						<i class="bi bi-telephone-fill"></i>+917020464064
					</a><br>
					<a href="tel: +917829386930" class="d-inline-block mb-2 text-decoration-none text-dark">
						<i class="bi bi-telephone-fill"></i>+917829386930
					</a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="bg-white p-4 rounded mb-4" style="height: 130px;">
					<h5 style="margin-top: 15px">E-mail</h5>
					<a href="mailto: ajjuisbot@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
						<i class="bi bi-envelope-fill"></i>officialzolo@gmail.com
					</a>
				</div>
			</div>
		</div>
		
	</div>

	<?php require('inc/footer.php')?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
	  loop: true,
	  autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	  }
    });

	var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
	  slidesPerView: "3",
	  loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>
</html>