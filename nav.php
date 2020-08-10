<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.php">Skin Beauty</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
							<?php
							if(isset($_SESSION['login']))
							{
								?>
								<li><a href="index.php">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.php">About Us</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="booking.php">Booking</a></li>
								<li><a href="booking_history.php">Booking History</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<?php
							}
							else
							{
								?>
								<li><a href="single.php">Register</a></li>
								<li><a href="login.php">Login</a></li>
								<?php
							}
							?>
								
								
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>