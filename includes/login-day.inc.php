<?php

	if(isset($_POST['login-submit'])){

		require 'dbh.inc.php';

		$mailuid = $_POST['userid'];
		$password = $_POST['pwd'];
		if(empty($mailuid) || empty($password)){

			header("Location: ../index-student-day.php?error=emptyfields");
			exit();
		}else{
			$sql = "SELECT * FROM student WHERE userid=?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../index-student-day.php?error=sqlerror");
				exit();
			}else{
				mysqli_stmt_bind_param($stmt,"s",$mailuid);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if($row = mysqli_fetch_assoc($result)){
				/*	$pwdCheck = password_verify($password, $row['pwdUsers']);*/
					if(!($password == $row['password'])){
						header("Location: ../index-student-day.php?error=wrongpwd");
						exit();
					}elseif($password == $row['password']){
						session_start();
						$_SESSION['userid'] = $row['userid'];
						$_SESSION['name'] = $row['name'];

						header("Location: ../login-student.php?user=".$_SESSION['name']);
						exit();


					}else{
						header("Location: ../index-student-day.php?error=wrongpwd");
						exit();
					}
				}else{
					header("Location: ../index-student-day.php?error=nouser");
					exit();
				}
			}
		}

	}else{
		header("Location: ../index-student-day.php");
		exit();
	}