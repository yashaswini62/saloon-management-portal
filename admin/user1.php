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
<title>Users</title>
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
											<li class="active">View Order's</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
												
												
													
													
																<h3 class="inner-tittle two">View Order's </h3>
														  <div class="graph">
															<div class="tables">
														
																<table class="table table-bordered">
																<thead>
																<tr>
																<th>S.no</th>
																<th>Name</th>
																<th>Mobile</th> 
																<th>Plan</th> 
																<th>Price</th> 
																<th>Date</th> 
																<th>Time</th> 
																<th>Status</th> 
																
																</tr> 
																</thead> 
																<tbody>
																<?php
		$n=1;
	$p="SELECT * FROM ((booking INNER JOIN package ON booking.plan=package.id) INNER JOIN register on booking.userid=register.id)
order by booking.id desc";
		$result=select($p);
		while($ty=mysqli_fetch_array($result))
		{
			extract($ty);
		
		
		?>
          <tr data-expanded="true">
            <td><?=$n;?></td>
            <td><?=ucwords($name);?></td>
            <td><?=$mobile?></td>
            <td><?=$titles?></td>
            <td><?=$price?> /-</td>
            <td><?=$date_?></td>
            <td><?php 
			
			if($time="10_12")
			{
				echo"10 AM To 12 PM";
			}
			elseif($time="12_02")
			{
				echo"12 PM To 02 PM";
			}
			elseif($time="02_04")
			{
				echo"02 PM To 04 PM";
			}
			else
			{
				echo"04 PM To 06 PM";
			}
			?></td>
            <td><?php
			if($status==0)
			{
				?>
			<a href="conp.php?id=<?=$ty[0]?>">
			<button class=" btn-warning">Confirm	
			</button>
			</a>
			<?php
			}
			
		
			if($status==1)
			{
				?>
			<button class=" btn-success">Done	
			</button>	
			<?php
			}
			
			?></td>
			
			</tr>
          <?php
		$n++;
		}
		  ?>
																
																</tbody>
																</table> 
															</div>
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