<?php
	if(isset($_POST['li-submit'])){
		require 'dbConn.inc.php';
		$username = $_POST['li-username'];
		$password = $_POST['li-password'];
		$sql = "SELECT * FROM users WHERE username = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../../login.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$passwordCheck = password_verify($password,$row['password']);
				if($passwordCheck == false){
					header("Location: ../../login.php?error=invalidpass");
					exit();
				} elseif($passwordCheck == true){
					session_start();
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['avatar'] = $row['avatar'];
					header("Location: ../../main.php");
				} else {
					header("Location: ../../login.php?error=invalidpass");
					exit();
				}
			} else {
				header("Location: ../../login.php?error=nouser");
				exit();
			}
		}
	} else {
		header("Location: ../../index.php");
		exit();
	}