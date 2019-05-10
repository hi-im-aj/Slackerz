<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		$userID = $_SESSION['uid'];
	} else {
		header("Location: login?error=access");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slackerz: Workplace</title>
</head>
<body>
	<?php
	/*
		if(isset($_GET['id'])){
			echo "Welcome to workplace nr ".$_GET['id']."!";
		}
	*/
	?>
</body>
</html>