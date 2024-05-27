<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title>Contact - SJ Projects</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<!-- Swiper Min CSS -->
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="spinner"></div>
			</div>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
    <?php
    include("./includes/header.php")
    ?>
	<!-- End Navbar Area -->
	
	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Contact Us</h2>
						<ul>
							<li><a href="index.html">Home</a>
							</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Contact Section -->
	<div class="contact-section contact-page-form section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
                    <div class="contact-information-box-1">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="single-contact-info-box">
									<div class="contact-info">
										<h6>Address:</h6>
										<p>Infront of St. John Vianney's Girl's School, </p>
										<p>Palliyadi,Nagercoil, Kanayakumari</p>
									</div>
									<div class="contact-info-bg-icon">
										<i class="pe-7s-map-marker"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="single-contact-info-box">
									<div class="contact-info">
										<h6>Phone:</h6>
										<p>+91 7708613894</p>
										<p>+91 9150919525</p>
									</div>
									<div class="contact-info-bg-icon">
										<i class="pe-7s-call"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="single-contact-info-box">
									<div class="contact-info">
										<h6>Email:</h6>
										<p>sjprojects11@gmail.com</p>
									</div>
									<div class="contact-info-bg-icon">
										<i class="pe-7s-mail"></i>
									</div>
								</div>
							</div>
						</div>
                    </div>
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="contact-form contact-form-1">
						<p class="form-message"></p>
						<form id="contact-form" class="form" action="php-mails.php" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn">Send Message <span></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
    <!-- Map Section Start -->
    <div class="map-area">
        <div class="map-content">
            <!-- <div class="map-canvas" id="contact-map"></div> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.3079637991355!2d77.24653097407692!3d8.272114900379155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04ff7b82ebb76f%3A0x30125609a5e37fd5!2sSt.%20John%20Vianney&#39;s%20Girls&#39;%20Convent%20and%20School!5e0!3m2!1sen!2sin!4v1698323847078!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    <!-- Map Section End -->
	
	<!-- Start Footer Section -->
    <?php
    include("./includes/footer.php")
    ?>
	<!-- End Footer Section -->
	

	<!-- Start Go Top Section -->
	<div class="go-top">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->
	
	<!-- jQuery Min JS -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Bootstrap Min JS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- MeanMenu JS  -->
	<script src="assets/js/jquery.meanmenu.js"></script>
	<!-- Appear Min JS -->
	<script src="assets/js/jquery.appear.min.js"></script>
	<!-- CounterUp Min JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- Owl Carousel Min JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup Min JS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Isotope Min JS -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- Swiper Min JS -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- Gmap3 Min JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ_mGhah8EApmFiXYYBsdBuygviP2M2EE"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<!-- Google Map JS -->
	<script src="assets/js/map.js"></script>
	<!-- WOW Min JS -->
	<script src="assets/js/wow.min.js"></script>
	<!-- Ajax Mail JS -->
	<script src="assets/js/ajax.mail.js"></script>
	<!-- Main JS -->
	<script src="assets/js/main.js"></script>
	
</body>

</html>