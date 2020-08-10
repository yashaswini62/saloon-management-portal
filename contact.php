<?php
require_once"dbconfig.php";
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
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->
	<!-- page details -->
	<div class="breadcrumb-agile">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<section class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Contact Us</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">Caption placed here</p>
			<div class="contact-form mx-auto text-left">
				<form method="post" action="#">
					<div class="row">
						<div class="col-lg-4 con-gd">
							<div class="form-group">
								<label>Name *</label>
								<input type="text" class="form-control" placeholder="Enter Name" name="name" required>
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group">
								<label>Email *</label>
								<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group">
								<label>Phone No. *</label>
								<input type="text" class="form-control" placeholder="Enter Phone no." name="phone" required>
							</div>
						</div>
					</div>
					<div class="form-group mt-4 mb-5">
						<label>How can we help?</label>
						<textarea name="message" class="form-control" placeholder="Enter Your Message Here" required></textarea>
					</div>
					<div class="contact-page">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- //contact -->

	<!-- map -->
	<div class="map p-2">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		 class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
	<!-- //map -->

	<!-- footer -->
	

	<!--footer -->
	<?php include"footer.php";?>
	<!-- //footer -->

</body>

</html>