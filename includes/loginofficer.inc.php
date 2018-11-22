<?php

	if(isset($_POST['officer-login'])){

		require 'dbh.inc.php';

		$mail = $_POST['email'];
		$password = $_POST['pwd'];
		$key = $_POST['key'];
		if(empty($mail) || empty($password)|| empty($key)){

			header("Location: ../index-student.php?error=emptyfields");
			exit();
		}else{
			$sql = "SELECT * FROM officer WHERE cemail=?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../index-student.php?error=sqlerror");
				exit();
			}else{
				mysqli_stmt_bind_param($stmt,"s",$mail);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if($row = mysqli_fetch_assoc($result)){
					$pwdCheck = password_verify($password, $row['pwd']);
					if($pwdCheck == false){
						header("Location: ../index-student.php?error=wrongpwd");
						exit();
					}elseif($pwdCheck == true){
						session_start();
						$_SESSION['userid'] = $row['userid'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['type'] = $row['ctype'];
						$_SESSION['phone'] = $row['phno'];
						$_SESSION['key'] = $row['gstkey'];
						$_SESSION['email'] = $row['cemail'];

						header("Location: ../officer/landing.php?login=".$_SESSION['name']);
						exit();


					}else{
						header("Location: ../index-student.php?error=wrongpwd");
						exit();
					}
				}else{
					header("Location: ../index-student.php?error=nouser");
					exit();
				}
			}
		}

	}else{
		header("Location: ../index.php");
		exit();
	}