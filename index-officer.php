<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zocial Login(officer)</title>
		<link rel="stylesheet" href="css/style-login.css">
		<link rel="stylesheet" href="css/main.css">
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
						<div class="col-md-1 col-xs-2 student-logo">
							<i class="fas fa-user-tie"></i>
						</div>
						<div class="col-md-11 col-xs-10">
							<div class="login-heading"><h2>Officers Benefits</h2></div>
						</div>
					</div>
					<br>
					<ul class="list-unstyled staff-benefits">
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Keep track of Students</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;View various college events</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Communicate with the College Authorities</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Communicate with Student with Authorisation of College Faculty</li>
						<li><span class="glyphicon glyphicon-ok"></span>&nbsp;Review Placement Data</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<form action="includes/loginofficer.inc.php" method="post">
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="pwd">Password</label>
							<input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" required>
						</div>
						<div class="form-group">
							<label for="key">GST ID/Authorisation Key</label>
							<input type="password" class="form-control" id="key" name="key" placeholder="GST ID/Authorisation Key" required>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="check">
							<label class="form-check-label" for="check">Stay Log in</label>
						</div>
						<button type="submit" name="officer-login" class="btn btn-primary">Submit</button>
						<div class="row">
							<div class="pass-forgot col-sm-8">
								<a class="" href="#">forgot Password?</a>
							</div>
							<div class="pass-forgot new-user col-sm-4">
								<a class="" href="officer/signup/index.php">New User</a>
							</div>
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
					<li><a href="index.php#contact">
      				<i class="fas fa-envelope my-float"></i>
    				</a></li>
					<li><a href="chat/index.php">
						<i class="fa fa-comment-alt my-float"></i>
					</a></li>
					<li><a href="index.php">
						<i class="fa fa-home my-float"></i>
					</a></li>
				</ul>
					<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					<script src="js/jquery-3.3.1.min.js"></script>
					<script src="js/bootstrap.js"></script>
				</body>
			</html>