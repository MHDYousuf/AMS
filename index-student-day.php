<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zocial Login(student)</title>
		<link rel="stylesheet" href="css/style-login-day.css">
		<link rel="stylesheet" href="css/main-day.css">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row headingg">
				<div class="heading">
					<h3><span>Zocial</span>&nbsp; AMS - Convenience and the ability to learn at any place and any time.</h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row email-form">
				<div class="col-sm-8 description">
					<div class="row">
						<div class="col-md-1 student-logo">
							<i class="fas fa-user-graduate"></i>
						</div>
						<div class="col-md-11 col-sm-11 col-xs-11">
							<div class="login-heading"><h2>Student Benefits</h2></div>
						</div>
					</div>
					<br>
					<ul class="list-unstyled staff-benefits">
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Learning convenience.</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Access course materials.</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Submit assignments online.</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Tests appear online.</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Access to results of various tests.</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Evaluate or rate the faculty.</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Easy library access.</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<form action="includes/login-day.inc.php" method="post">
						<div class="form-group">
							<label for="userid">Username</label>
							<input type="text" name="userid" class="form-control" id="userid" aria-describedby="emailHelp" placeholder="Enter UserName">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="pwd" class="form-control" id="password" placeholder="Password">
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Stay Log in</label>
						</div>
						<?php
								if(isset($_GET['error'])){
									if($_GET['error'] == "emptyfields"){
										echo '<p style="color:red";>Fill in all fields</p>';
									}elseif($_GET["error"] == "wrongpwd"){
										echo '<p style="color:red";>Entered Wrong Password</p>';
									}elseif($_GET["error"] == "nouser"){
										echo '<p style="color:red";>User with Username/Password not exists</p>';
									}
								}
						?>
						<button type="submit" class="btn btn-primary" name="login-submit">Submit</button>
						<div class="pass-forgot">
							<a class="" href="#">forgot Password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<section id="footer">
			<div class="container-fluid footer11">
				<div class="row contact-info foot">
					<div class="col-sm-4 tab-full">
						<div class="icon">
							<i class="icon-pin"></i>
						</div>
						<h4 class="contact-head">Where to find Us</h4>
						<p>
							MES COLLEGE OF ENGINEERING<br>
							Kuttipuram,Thrikkanapuram P.O<br>
							Kerala-INDIA
						</p>
					</div>
					<div class="col-sm-4 tab-full">
						<div class="icon">
							<i class="icon-mail"></i>
						</div>
						<h4 class="contact-head">Email Me At</h4>
						<p>contact@zocial.com<br>
							info-support@zocial.com
						</p>
					</div>
					<div class="col-sm-4 tab-full">
						<div class="icon">
							<i class="icon-phone"></i>
						</div>
						<h4 class="contact-head">Call Me At</h4>
						<p>Phone: 953 931 3920<br>
							Mobile: 953 931 3920<br>
							Fax: 953 931 3920
						</p>
					</div>
					
					</div> <!-- /contact-info -->
					<!-- /contact -->
					<div class="row">
						<div class="col-sm-12 tab-full">
							<div class="copyright">
								<span>© Copyright Zocial 2018 - All Rights Reserved.</span>
							</div>
						</div>
					</div>
					</div> <!-- /row -->
				</section>
			

				<a href="#" class="float" id="menu-share">
					<i class="fa fa-plus my-float"></i>
				</a>
				<ul class="floatting">
					<li><a href="index-day.html#contact">
      				<i class="fas fa-envelope my-float"></i>
    				</a></li>
					<li><a href="chat/index.html">
						<i class="fa fa-comment-alt my-float"></i>
					</a></li>
					<li><a href="index-day.html">
						<i class="fa fa-home my-float"></i>
					</a></li>
				</ul>
					<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					<script src="js/jquery-3.3.1.min.js"></script>
					<script src="js/bootstrap.js"></script>
				</body>
			</html>