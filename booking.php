<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Skin Beauty Beauty & Spa </title>
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
  <script src="css/jquery.min.js"></script>

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/blog.css" type="text/css" media="all" />
	<!-- Blog-CSS -->
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
			<li class="breadcrumb-item active" aria-current="page">Booking Form</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- single -->
	<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Booking Form </h3>
			<div class="row blog-content pt-lg-3">
				<!-- left side -->
				<div class="col-lg-2 left-blog-info text-left"></div>
				<div class="col-lg-8 left-blog-info text-left">
					
					
					<div class="comment-top mt-5">
						<h4></h4>
						<div class="comment-bottom">
							<form action="myphp.php" method="post">
								<div class="form-group">
								Choose Any One 
								<select class="form-control"  id="property_name" name="plan" >
									
								<?php
								$t=select("select * from package");
								while($r=mysqli_fetch_array($t))
								{extract($r);
								?>
								<option value="<?=$id?>"><?=$titles?></option>
								<?php
								}
								?>
									</select>
								</div>
								<div class="form-group">
								
								Price
								<select name="price" id="price" class="form-control action">
    
   
   </select></div>
   <div class="form-group">
	<select name="time" class="form-control">
   <option value="10_12">10.00 am to 12.00 pm</option>
   <option value="12_02">12.00 pm to 02.00 pm</option>
   <option value="02_04">02.00 pm to 04.00 pm</option>
   <option value="04_06">04.00 pm to 06.00 pm</option>
   </select></div>
   
   							<button type="submit" name="booking" class="btn btn-primary submit">Book</button>
							</form>
						</div>
					</div>
				</div>
				<!-- //left side -->
				<!-- right side -->
						
						
						
					</div>
				</div>
				<!-- //right side -->
			</div>
		</div>
	</div>
	<!-- //single -->

<script>
$(document).ready(function(){
		
	$("#property_name").change(function(){
		var id=$(this).val();
$.ajax({
			
			
			url:"fetch.php",
			method:"post",
		data:{id:id},
		datatype:"text",
		success:function(data)
		{
			$(price).html(data);
		}
		});
		
		
		
	});
});
</script>


	<!--footer -->
	<?php include"footer.php";?>
	<!-- //footer -->

</body>

</html>