<?php
	include("includes/functions.php");
		$show = professional_registration();

	include 'server.php';

		
?>


<!DOCTYPE html>
<html lang="zxx">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>::.Meet-Up Career - Login Form.::</title>
		<link rel="icon" href="images/favicon.png">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<!-- Owl-coursel -->
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.transitions.css">
		<!-- Font-awesome -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<!-- Css -->
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style type="text/css">
		.box{
			width: 800px;
		}
.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}
		</style>
		
		</head>
	
	
	
	<body id="education">
		<div class="preloader">
			<i class="fa fa-spinner"></i>
		</div>
		<header class="header-fixed">
			<div class="top-header bg-4f84c4">
				<div class="container">
					<div class="row">
						<div class="col-md-6 d-none d-md-block">
							<ul class="list-top">
								<li><i class="fa fa-phone m-r-5"></i>+234-706-3000-971</li>
								<li><i class="fa fa-envelope-o m-r-5"></i>info@meetupcareers.com</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="float-right list-top">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xs-6 col-sm-3">
							<a href="index.php" class="logo">
								<img src="images/e-logo.jpg" alt="image">
							</a>
						</div>
						<div class="col-xs-4 col-sm-9 hidden-md hidden-lg">
							<nav id="holder_mn" class="menu-nav pull-right">
								<div class="menu-btn"></div>
								<ul class="menu">
									<li>
										<a href="index.html">Home</a>
									</li>
									<li>
										<a href="need-a-mentor.html">Need a Mentor?</a>
									</li>
									<li>
										<a href="#">Become a Mentor</a>
									</li>
									<li>
										<a href="#">I Need Data</a>
									</li>
									<li>
										<a href="#">Literature Review</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="page-title">
			<div class="card"><br/><br/>
				<div class="card-img-overlay">
					<div class="container">
						<h1 class="card-title">Login to your account</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-f5 m-b-0 p-t-100 p-b-1000">
			<div class="container">
				<div class="card card-box max-w-1000">
					<div class="card-header"><h3 class="">Login Here</h3></div>


					<form action="server.php" method="post" class="card-body">

						<div class="form-group">
                        <label>As:</label>
						
						<select name="loginAs" class="form-control" required>
						<option value="">----</option>
						<option value="stud">Student</option>
						<option value="teach">Teacher</option>
						<option value="prof">Professional</option>
			
						</select>
                    </div>

						<div class="form-group">
							<label>E-mail:</label>
							<input name="email" type="email" class="form-control" placeholder="E-mail" required>
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input name="password" type="password" class="form-control" placeholder="Password" required>
						</div>
						<input type="submit" name="login" Value="Login" class="btn m-t-15">
					</form>
				</div>
				<div class="text-center"></div>
			</div>
		</section>
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<h3>Contact</h3>
							<p>Covenant Universtiy</p>
							<ul class="list">
								<li><a href="#">Sango Otta , Ogun State</a></li>
								<li><a href="#">+234-706-3000-971</a></li>
								<li><a href="#">info@meetupcareers.com</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-2">
							<h3>About</h3>
							<ul>
								<li><a href="about-us.html">About us</a></li>
								<li><a href="#">Mentors</a></li>
								<li><a href="#">Mentees</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Help center</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-2">
							<h3>Commulity</h3>
							<ul>
								<li><a href="#">Discussions</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Guidelines</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4">
							<h3>Newsletter</h3>
							<p>Get latest updates and news from Meet-Up Career</p>
							<form class="form-group">
								<input type="text" class="form-control" placeholder="Enter your email">
								<a href="#" class="btn">Subscribe</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p class="f-15">&nbsp;2019. All rights reserved - Meet-Up Careers| Designed by <a href="#">e-world</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery -->
		<script src="js/jquery/jquery-2.2.4.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap/popper.min.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Owl-coursel -->
		<script src="js/owl-coursel/owl.carousel.js"></script>
		<!-- Script -->
		<script src="js/script.js"></script>
		
	</body>

</html>