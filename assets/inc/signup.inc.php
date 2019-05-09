<?php
	if(isset($_POST['ca-submit'])){
		require 'dbConn.inc.php';
		$username = $_POST['ca-username'];
		$email = $_POST['ca-email'];
		$password = $_POST['ca-password'];
		$password2 = $_POST['ca-password2'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
			header("Location: ../../signup?error=invalidemailusername");
			exit();
		} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../../signup?error=invalidemail");
			exit();
		} elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
			header("Location: ../../signup?error=invalidusername");
			exit();
		} elseif($password !== $password2){
			header("Location: ../../index?error=passconfirm");
			exit();
		} else {
			$sql = "SELECT username FROM users WHERE username = ?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../../signup?error=sqlerror");
				exit();
			} else {
				mysqli_stmt_bind_param($stmt,"s",$username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$rowResults = mysqli_stmt_num_rows($stmt);
				if($rowResults > 0){
					header("Location: ../../signup?error=userexist");
					exit();
				} else {
					$sql = "INSERT INTO users (username, email, password, avatar) VALUES (?, ?, ?,'default.png');";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("Location: ../../signup?error=sqlerror2");
						exit();
					} else {
						$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
						mysqli_stmt_execute($stmt);
						header("Location: ../../login?signup=success");
						exit();
					}
				}
			}
		}
	} else {
		header("Location: ../../index?isset-error");
	}