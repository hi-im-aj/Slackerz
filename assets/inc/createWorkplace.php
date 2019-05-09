<?php
	session_start();
	if(isset($_POST['cw-submit']) && isset($_SESSION['username'])){
		require 'dbConn.inc.php';
		$userID = $_SESSION['uid'];
		$workplaceName = $_POST['cw-name'];
		$imgPath = 'default.png';
		if(preg_match("/^[a-zA-Z0-9_ -]*$/",$workplaceName)){
			$sql = "SELECT name FROM workplaces WHERE name = ?;";
			$stmt = mysqli_stmt_init($conn);
			if(mysqli_stmt_prepare($stmt,$sql)){
				mysqli_stmt_bind_param($stmt,"s",$workplaceName);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$rowResults = mysqli_stmt_num_rows($stmt);
				if($rowResults === 0){
					$sql = "INSERT INTO workplaces (ownerID, avatar, name) VALUES (?, ?, ?);";
					$stmt = mysqli_stmt_init($conn);
					if(mysqli_stmt_prepare($stmt, $sql)){
						mysqli_stmt_bind_param($stmt, "sss", $userID, $imgPath, $workplaceName);
						mysqli_stmt_execute($stmt);
						header("Location: ../../menu?msg=success");
						exit();
					} else {
						header("Location: ../../menu?error=sqlPrepError2");
						exit();
					}
				} else {
					header("Location: ../../menu?error=nameTaken");
					exit();
				}
			} else {
				header("Location: ../../menu?error=sqlPrepError1");
				exit();
			}
		} else {
			header("Location: ../../menu?error=pregmatch");
			exit();
		}
	} else {
		header("Location: ../../menu?error=access");
		exit();
	}