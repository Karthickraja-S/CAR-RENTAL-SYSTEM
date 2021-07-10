<?php
	session_start();
	//error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">SK HIRE VEHICLES</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!isset($_SESSION['email']) && (!isset($_SESSION['pass']))){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					<li>	<button><a href="account.php"><p style = "color :black"> Client Login </p> </a></button> </li>
					<li>     <button><a href="login.php"><p style = "color :black">Admin Login</p> </a></button> </li>
					</ul>
				
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>