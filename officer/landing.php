<?php
session_start();
?>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
	<title>Dashboard Template for Bootstrap</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/dashboard.css" rel="stylesheet">
	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="js/ie-emulation-modes-warning.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link href="signup/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="signup/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Vendor CSS-->
	<link href="signup/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	<!-- Main CSS-->
	<link href="css/report.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo $_SESSION['name'];?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Dashboard</a></li>
					<li id="profile"><a href="#">Profile</a></li>
					<li><a href="#">Help</a></li>
					<li>
						<form action="../includes/logout.inc.php" method="post">
							<button style="position: relative;top:0vh;right: 0vh; transform: scale(0.7);" class="btn btn-danger logout-btn" name="logout">Logout&nbsp;<i class="fas fa-sign-out-alt"></i></button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li  id="dash"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
					<script>
										$(document).ready(function() {
											$("#profile").click(function(){
													$("#dashboard").hide();
													$("#profilesec").show();
													$("#reportform").hide();
												});
												$("#dash").click(function(){
													$("#dashboard").show();
													$("#profilesec").hide();
													$("#reportform").hide();
												});
									$("#report").click(function(){
													$("#dashboard").hide();
													$("#profilesec").hide();
													$("#reportform").show();
												});
						});
					</script>
					<li id="report"><a href="#">Reports</a></li>
				</ul>
				<ul class="nav nav-sidebar">
					<li><a href="">Student Check</a></li>
					<li><a href="../chat/index.php">Chatroom with Students</a></li>
					<li><a href="">Queries with faculty</a></li>
					<li><a href="https://mail.google.com">Checkout Mail</a></li>
					<li><a href="http://mesce.ac.in">Visit MESCE</a></li>
				</ul>
				<ul class="nav nav-sidebar">
					<li><a href="">Favourites</a></li>
					<li><a href="https://www.linkedin.com/">Linkedin</a></li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
				<div id="dashboard" class="container-fluid" style="padding-top: 10vh;">
					<img src="images/dash-school.png" style="width: 100% ;height:80vh; ">
				</div>
				<div id="reportform"class="container-fluid" style="display: none">
					<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
						<div class="wrapper wrapper--w680">
							<div class="card card-4">
								<div class="card-body">
									<h2 class="title text-center">Report Section</h2>
									<?php
									if(isset($_GET['error'])){
									if($_GET['error'] == "emptyfields"){
									echo '<p style="color:red";>Fill in all fields</p>';
									}elseif($_GET["error"] == "invalidmailname"){
									echo '<p style="color:red";>Invalid name and E-mail</p>';
									}elseif($_GET["error"] == "invalidname"){
									echo '<p style="color:red";>Invalid name</p>';
									}elseif($_GET["error"] == "invalidmail"){
									echo '<p style="color:red";>Invalid E-mail</p>';
									}elseif($_GET["error"] == "passwordcheck"){
									echo '<p style="color:red";>Your password do not match</p>';
									}elseif($_GET["error"] == "emailtaken"){
									echo '<p style="color:red";>Email is already taken</p>';
									}
									}
									elseif(isset($_GET['signup'])){
									if($_GET["signup"] == "success"){
									echo  '<p style="color:green";>Signup Successfully</p>';
									}
									}
									?>
									<form action="../../includes/signupofficer.inc.php" method="POST">
										<div class="input-group" style="width:95%">
											<label class="label">Company Name</label>
											<input class="input--style-4 text-center" type="text" name="name" value="<?php echo $_SESSION['name'] ?>" disabled>
										</div>
										<div class="row row-space">
											<div class="col-2">
												<div class="input-group">
													<label class="label">Company Email</label>
													<input class="input--style-4" type="email" name="email" value="<?php echo $_SESSION['email']?>" disabled>
												</div>
											</div>
											<div class="col-2">
												<div class="input-group">
													<label class="label">Phone Number</label>
													<input class="input--style-4" type="number" name="phone" value="<?php echo $_SESSION['phone']?>" disabled>
												</div>
											</div>
										</div>
										<div class="input-group">
											<label class="label">Report to:</label>
											<div class="rs-select2 js-select-simple select--no-search">
												<select name="subject" style="padding:11px;width: 38vw;">
													<option disabled="disabled" selected="selected">Choose option</option>
													<option>Principal of Institution</option>
													<option>HOD of Department</option>
													<option>Club Captain</option>
													<option>Student Representator</option>
												</select>
												<div class="select-dropdown"></div>
											</div>
										</div>
										<div class="row row-space">
											<div class="input-group">
												<label class="label">Type of Company</label>
												<input class="input--style-4" type="text" name="key" value="<?php echo $_SESSION['type']?>" disabled>
											</div>
										</div>
										<div class="row">
											<div class="input-group" style="width:100%">
												<label class="label">Report</label>
												<textarea name="report" class="input--style-4" placeholder="Write Report to Staff" style="width:95%"></textarea>
											</div>
										</div>
										<div class="p-t-15">
											<button class="btn btn--radius-2 btn--blue text-center" style="position: relative;left:14vw;" name="signup-submit"type="submit">Submit</button>
											
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="profilesec"class="container-fluid" style="display: none">
					<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
						<div class="wrapper wrapper--w680">
							<div class="card card-4">
								<div class="card-body">
									<h2 class="title text-center">Profile</h2>
									<?php
									if(isset($_GET['error'])){
									if($_GET['error'] == "emptyfields"){
									echo '<p style="color:red";>Fill in all fields</p>';
									}elseif($_GET["error"] == "invalidmailname"){
									echo '<p style="color:red";>Invalid name and E-mail</p>';
									}elseif($_GET["error"] == "invalidname"){
									echo '<p style="color:red";>Invalid name</p>';
									}elseif($_GET["error"] == "invalidmail"){
									echo '<p style="color:red";>Invalid E-mail</p>';
									}elseif($_GET["error"] == "passwordcheck"){
									echo '<p style="color:red";>Your password do not match</p>';
									}elseif($_GET["error"] == "emailtaken"){
									echo '<p style="color:red";>Email is already taken</p>';
									}
									}
									elseif(isset($_GET['signup'])){
									if($_GET["signup"] == "success"){
									echo  '<p style="color:green";>Signup Successfully</p>';
									}
									}
									?>
									<form action="../../includes/signupofficer.inc.php" method="POST">
										<div class="input-group" style="width:95%">
											<label class="label">Company Name</label>
											<input class="input--style-4 text-center" type="text" name="name" value="<?php echo $_SESSION['name'] ?>" disabled>
										</div>
										<div class="row row-space">
											<div class="col-2">
												<div class="input-group">
													<label class="label">Company Email</label>
													<input class="input--style-4" type="email" name="email" value="<?php echo $_SESSION['email']?>" disabled>
												</div>
											</div>
											<div class="col-2">
												<div class="input-group">
													<label class="label">Phone Number</label>
													<input class="input--style-4" type="number" name="phone" value="<?php echo $_SESSION['phone']?>" disabled>
												</div>
											</div>
										</div>
										<div class="row row-space">
											<div class="col-2">
												<div class="input-group">
													<label class="label">Type of Company</label>
													<input class="input--style-4" type="text" name="type" value="<?php echo $_SESSION['type']?>" disabled>
												</div>
											</div>
											<div class="col-2">
												<div class="input-group">
													<label class="label">GST Key</label>
													<input class="input--style-4" type="text" name="key" value="<?php echo $_SESSION['key']?>" disabled>
												</div>
											</div>
										</div>
										<div class="p-t-15">
											<button class="btn btn--radius-2 btn--blue text-center" style="position: relative;left:14vw;" name="signup-submit"type="submit">Submit</button>
											
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="js/vendor/holder.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
</body></html>