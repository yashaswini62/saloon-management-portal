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


<!DOCTYPE HTML>
<html>
<head>
<title>Edit Package</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MAMBER Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<div class="breadcrumbs">
         
			<div >	 <div class="page-header float-left">
                    
                </div>	
            <h1> 
			</h1>
			
            </div>
			
            
        </div>
						<!--menu-right-->
						<!--menu-right-->
						<div class="top_menu">
						       	<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
								
							   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.php">Home</a></li>
											<li class="active">Edit Package</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
												
												
													
													
																<h3 class="inner-tittle two">Edit Package </h3>
														  <div class="graph">
															
<?php 
$t=select("select * from package where id='".$_REQUEST['id']."'");
while($y=mysqli_fetch_array($t))
{
	extract($y);

?>									
									<form method="post" action="myphp.php" enctype="multipart/form-data">
  <div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control " value="<?=$titles?>"  name="title" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
  <div class="form-group col-lg-6">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" name="price"  value="<?=$charge?>" id="exampleInputPassword1">
    <input type="hidden" class="form-control" name="id"  value="<?=$id?>" id="exampleInputPassword1">
  </div>
  
    <div class="form-group col-lg-6">
    <label for="exampleFormControlFile1">Description</label>
    <textarea class="form-control" name="description" > <?=$description?></textarea>
  </div>
<button type="submit" name="go_update" class="btn btn-primary">Update</button>
</form>
<?php
}
?>
															
															
													</div>
										
										
										
										
										
										
										
										
										
										
										
										
										
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									 	<!--footer -->
	<?php include"footer.php";?>
	<!-- //footer -->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>MAMBER</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							   <!--//down-->
								<?php include"sidebar.php";?>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>