<?php
	if(isset($_POST['signup-submit'])){

		require 'dbh.inc.php';

		$name= $_POST['name'];
		echo $name;
		$companydate= $_POST['companydate'];
		echo $companydate;
		$reg= $_POST['recruit'];
		echo $reg;
		$email= $_POST['email'];
		echo $email;
		$phone= $_POST['phone'];
		echo $phone;
		$ctype= $_POST['subject'];
		echo $ctype;
		$key= $_POST['key'];
		echo $key;
		$password= $_POST['pwd'];
		echo $password;
		$passwordRepeat= $_POST['pwd-repeat'];
		echo $passwordRepeat;

		if(empty($name) || empty($companydate) || empty($reg) || empty($email) || empty($phone) || empty($key) || empty($password) || empty($passwordRepeat)){

			header("Location: ../officer/signup/index.php?error=emptyfields&uid=".$name."&mail=".$email);
			exit();
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)){
			header("Location: ../officer/signup/index.php?error=invalidmail&name");
			exit();
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../officer/signup/index.php?error=invalidmail&name=".$name);
			exit();
		}
		elseif(!preg_match("/^[a-zA-Z0-9 ]*$/", $name)){
			header("Location: ../officer/signup/index.php?error=invalidname&mail=".$email);
			exit();
		}
		elseif($password !== $passwordRepeat){
			header("Location: ../officer/signup/index.php?error=passwordcheck&name=".$name."&mail=".$email);
			exit();
		}
		else{

			$sql = "SELECT cemail FROM officer WHERE cemail=?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../officer/signup/index.php?error=sqlerror");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt,"s",$email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0){
					
					header("Location: ../officer/signup/index.php?error=emailtaken&mail=".$email);
					exit();

				}
				else{

					$sql="INSERT INTO officer(name, companyfound, mcaregister, cemail, phno, ctype, gstkey, pwd) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../officer/signup/index.php?error=sqlerror");
						exit();
					}else{
						$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt,"ssssisis",$name, $companydate, $reg, $email, $phone, $ctype, $key, $hashedPwd);
						mysqli_stmt_execute($stmt);
						header("Location: ../officer/signup/index.php?signup=success");
						exit();
					}
				}
			}
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else{
		header("Location: ../officer/signup/index.php");
		exit();
	}
