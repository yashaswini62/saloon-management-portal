<div class="down">	
									  <a href="index.php"><img src="images/a.jpg"></a></br>
									 <ul>
									 <?php
									
									if(isset($_SESSION['login']))
									{
										?>
									<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
								<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										<?php
									}
										?></ul>
									</div>
							   <!--//down-->
							   <div class="menu">
									<ul id="menu" >
									<?php
									
									if(isset($_SESSION['login']))
{
?>
<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
								  <li><a href="add_pac.php"><i class="lnr lnr-pencil"></i> <span>Add Package</span></a></li>
								  <li><a href="table.php"><i class="lnr lnr-pencil"></i> <span>View Package</span></a></li>
								  <li><a href="user.php"><i class="lnr lnr-pencil"></i> <span>View User's</span></a></li>
								  <li><a href="user1.php"><i class="lnr lnr-pencil"></i> <span>Order's</span></a></li>
								 	<li><a href="logout.php"><i class="lnr lnr-pencil"></i> <span>Logout</span></a></li>
								    
<?php	
}
else
{
	?>
	<li><a href="login.php"><i class="lnr lnr-pencil"></i> <span>Login</span></a></li>
									
<?php
}
?>
									</ul>
								</div>