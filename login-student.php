<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile</title>
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style-login-inside.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Zocial</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right navii">
						<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Performance</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documents <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Personal</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Academic</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Others</a></li>
							</ul>
						</li>
						<li><a href="#">Library Record</a></li>
						<li><a href="#">Placement</a></li>
						<li><a href="#">Notification&nbsp;<span class="badge badge-light">9</span></a></li>
						<li style="display: inline-flex">
							<form action="includes/logout.inc.php" method="post">
								<button class="btn btn-danger logout-btn" name="logout">Logout&nbsp;<i class="fas fa-sign-out-alt"></i></button>
							</form>
						</li>
					</ul>
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

				<div class="container-fluid">
					<div class="col-sm-2">
						<div class="row image">
							<img src="images/profile.png"/>
							<?php 
							$name=$_SESSION['name'];
							echo "<p style='margin-top:10px'>$name</p>";?>
						</div>
						<div class="container-fluid features">
							<div>
								<h5><a href="">Profile Setting</a></h5>
							</div>
							<div>
								<h5><a href="">Fees</a></h5>
							</div>
							<div>
								<h5><a href="">Documents</a></h5>
							</div>
							<div>
								<h5><a href="">Assignment Mark</a></h5>
							</div>
							<div>
								<h5><a href="">Performance</a></h5>
							</div>
							<div>
								<h5><a href="">University Results</a></h5>
							</div>
							<div>
								<h5><a href="">Hostel & Transport</a></h5>
							</div>
							<div>
								<h5><a href="">Message Box&nbsp;<span class="badge badge-light">0</span></a></h5>
							</div>
							<div>
								<h5><a href="">Committee</a></h5>
							</div>
							<div>
								<h5><a href="">Evaluation</a></h5>
							</div>
							<div>
								<h5><a href="chat/index.php?name="<?php echo $_SESSION['name']?>>Chatroom</a></h5>
							</div>
							<div>
								<h5><a href="">Job</a></h5>
							</div>
							<div>
								<h5><a href="">Sem/Term Registration</a></h5>
							</div>
							<div>
								<h5><a href="">Course Survey</a></h5>
							</div>
							<div>
								<h5><a href="">Exam Enrollment</a></h5>
							</div>
						</div>
					</div>
				</div>






				<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="js/jquery-3.3.1.min.js"></script>
				<script src="js/bootstrap.js"></script>
			</body>
		</html>