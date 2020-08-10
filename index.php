<?php
require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Skin Beauty Beauty & Spa</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Skin Beauty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<?php include"nav.php";?>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to our</p>
								<h3 class="w3ls_pvt-title">Skin Beauty</h3>
								<a href="about.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt text-center mx-auto">
								<p>We Are Full Service</p>
								<h3 class="w3ls_pvt-title">Beauty & Skin</h3>
								<a href="about.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt text-right ml-auto">
								<p>We Have The Best</p>
								<h3 class="w3ls_pvt-title">Facial Spa</h3>
								<a href="about.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
				</div>
				<div class="navigation">
					<div>
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about -->
	<div class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Welcome to our Website</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">Experience the art of caring</p>
			<div class="row about-bottom-w3l text-center pt-xl-5">
				<div class="col-md-6">
					<div class="about-grid-main">
						<img src="images/a1.png" alt="" class="img-fluid">
						<h4 class="my-3">Pedicure & Beauty</h4>
						<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
						<a href="about.php" class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
							Read More
						</a>
					</div>
				</div>
				<div class="col-md-6 about-grid mt-md-0 mt-4">
					<div class="about-grid-main">
						<img src="images/a2.png" alt="" class="img-fluid">
						<h4 class="my-3">Spa & Massage</h4>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
						<a href="about.php" class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
							Read More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- middle section one -->
	<div class="agile-wthree-works py-5" id="some">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="grids-w3ls-right-2 offset-xl-7 offset-md-6">
					<h4 class="title text-dark mb-lg-5 mb-4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
						fugit</h4>
					<p class="mt-4">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad reprehenderit qui in
						ea voluptate velit
						esse </p>
					<a href="blog.php" class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
						Read More
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section one -->

	<!-- best in -->
	<div class="models-agile pb-5 py-xl-0 py-md-5">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row">
				<div class="offset-xl-2"></div>
				<div class="col-xl-5 col-md-6 left-models mt-lg-5 mt-md-3 pt-lg-4">
					<h3 class="title text-bl font-weight-bold mb-1">We Are Best In</h3>
					<p class="title-sub mb-sm-4 mb-3">Caption placed here</p>
					<p>Sed semper leo metus, a lacinia eros semper at sed do eiusmod tempor incididunt ut labore et dolore
						magnaaliqua.</p>
					<a href="about.php" style="max-width: 150px;" class="btn button-style button-style-3 mt-sm-5 mt-4">Learn More</a>
				</div>
				<div class="col-xl-5 col-md-6 right-models text-center mt-md-0 mt-5">
					<div class="row">
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-smile-o" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Massage</h5>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-female" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Hair Style</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-heart" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Facial Style</h5>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-eye" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Eyebrows</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //best in -->

	<!-- middle section two -->
	<div class="middle-w3l text-center py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="py-xl-4 py-lg-2">
				<p class="mx-auto font-weight-bold"><span class="fa fa-quote-left mr-3" aria-hidden="true"></span>You will like to
					look like goddess <br>every day!<span class="fa fa-quote-right ml-3" aria-hidden="true"></span></p>
				<a href="contact.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Contact Us</a>
			</div>
		</div>
	</div>
	<!-- //middle section two -->

	<!-- services -->
	<div class="services py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Our Services</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">New Treatments</p>
			<div class="ins-sec1">
				<div class="row">
					<div class="col-lg-8 mx-auto mt-lg-5">
						<div class="row">
							<div class="col-lg-6 my-lg-0 my-md-5">
								<div class="abt-block mt-sm-0">
									<div class="serv_abs  serv_bottom">
										<span class="fa fa-user-md"></span>
									</div>
									<h3>SCRUBS MEDICINE</h3>
									<p>Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna
										dictum
										porta.
									</p>
								</div>
							</div>
							<div class="col-lg-6 mt-lg-0 mt-md-5">
								<div class="abt-block">
									<div class="serv_abs  serv_bottom">
										<span class="fa fa-thumbs-o-up"></span>
									</div>
									<h3>WELL TRAINED EXPERTS</h3>
									<p>Rutrum congue donec leo eget malesuada. Cras ultricies ligula sed magna
										dictum
										porta.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-md-5 pt-md-5">
					<div class="col-lg-4">
						<div class="abt-block mb-lg-0 mb-md-5">
							<div class="serv_abs serv_bottom">
								<span class="fa fa-star"></span>
							</div>
							<h3>HERBAL SPA TREATS</h3>
							<p>Rutrum congue donec leo eget malesuada. Cras ultricies ligula sed magna dictum
								porta.</p>
						</div>
					</div>
					<div class="col-lg-4 my-lg-0 my-md-5">
						<div class="abt-block">
							<div class="serv_abs serv_bottom">
								<span class="fa fa-magic"></span>
							</div>
							<h3>ROOTS & SCRUB TREATS</h3>
							<p>Congue rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum
								porta.</p>
						</div>
					</div>
					<div class="col-lg-4 mt-lg-0 mt-md-5">
						<div class="abt-block">
							<div class="serv_abs serv_bottom">
								<span class="fa fa-child"></span>
							</div>
							<h3>HERBAL SPA TREATS</h3>
							<p>Cras ultricies congue rutrum congue leo eget malesuada. Ligula sed magna dictum
								porta.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- product section -->
	<div class="product py-5" id="product">
		<div class="container-fluid py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 text-lg-left text-center mb-lg-0 mb-4">
					<img src="images/product.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-xl-4 col-lg-6 mt-xl-2">
					<h3 class="title text-bl font-weight-bold mb-4">Product we use for <br>you</h3>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="about.php" style="max-width: 150px;" class="btn button-style button-style-3 mt-sm-5 mt-4">Read More</a>
				</div>
				<div class="col-xl-2"></div>
			</div>
		</div>
	</div>
	<!-- //product section -->

	<!-- testimonials -->
	

	<!-- support -->
	

	<!-- footer -->
	
	<!-- //footer -->

	<!-- footer last -->
	<div class="newsletter-main text-center py-md-5 py-4">
		<div class="container">
			<a href="#home" class="move-top text-center"></a>
		
			<div class="w3agile_footer_copy mt-sm-5 mt-4">
				<p>© 2020 Skin Beauty. All rights reserved | Design by
					<a href="#">MySite.in</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer last -->

</body>

</html>