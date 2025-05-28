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
	
	

	<?php require('inc/footer.php')?>
	

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    
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