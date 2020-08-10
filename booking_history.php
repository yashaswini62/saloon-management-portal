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
			<li class="breadcrumb-item active" aria-current="page">Booking History</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- about -->
	<section class="about-w3ls py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Booking History</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">Some Info</p>
			<div class="row">
				<div class="col-lg-6 about-left-w3pvt">
					<div class="main-img">
						<img src="images/ab.jpg" alt="" class="img-fluid pos-aboimg2">
					</div>
				</div>
				<div class="col-lg-6 about-right pt-5">
<table class="table">
<tr style="font-weight:bold">
<td>No.</td>
<td>Plan</td>
<td>Price</td>
<td>Date</td>
<td>Status</td>
</tr>
<?php
$i=1;
$a=select("SELECT * FROM `booking` INNER JOIN package on booking.plan=package.id where booking.userid='".$_SESSION['id']."' order by booking.id desc");
while($t=mysqli_fetch_array($a))
{extract($t);
?>
<tr>
<td><?=$i?></td>
<td><?=$titles?></td>
<td><?=$price?> /-</td>
<td><?=$date_?></td>
<td><?php if($status==0)
{
	echo"<button class='btn btn-warning'>Confirmed</button>";
}
else
{
echo"<button class='btn btn-success'>Successful</button>";
	
}?></td>
</tr>
<?php
$i++;
}
?>
</table>					
					</div>
			</div>
		</div>
	</section>
	<!-- //about -->

	<!-- stats section -->
	

	<!-- services -->
	

	<!-- team -->
	<div class="team py-5" id="team">
		<div class="container pb-xl-5 pb-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Our Professional Team</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">Caption placed here</p>
			<div class="row team-bottom pt-4">
				<div class="col-lg-3 col-6 team-grid">
					<img src="images/t1.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Mack Joe</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-6 team-grid">
					<img src="images/t3.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Cruz Deo</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-6 team-grid mt-lg-0 mt-4">
					<img src="images/t2.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rochy Jae</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-6 team-grid  mt-lg-0 mt-4">
					<img src="images/t4.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rojo Poy</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->

	<!-- testimonials -->
	<section id="testi">
		<div class="row no-gutters testi-bg-main">
			<div class="col-lg-7">
				<div class="testi-bg">
				</div>
			</div>
			<div class="col-lg-5 my-auto py-lg-0 py-5">
				<div class="title-section pb-lg-5 pb-4 text-center">
					<h4 class="text-bl mb-2">We have</h4>
					<h3 class="w3ls-title text-wh text-uppercase let font-weight-bold">7630 happy users</h3>
				</div>
				<div class="text-center  testi-cgrid">
					<div class="testi-icon">
						<span class="fa fa-user" aria-hidden="true"></span>
					</div>
					<h6 class="b-w3ltxt mt-4">Steve Joe</h6>
					<p class="mx-auto">Onec consequat sapien ut leo cursus
						rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonials -->

	<!-- support -->
	

	<!--footer -->
	<?php include"footer.php";?>
	<!-- //footer -->

</body>

</html>