<?php
	session_start();
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	} else {
		header("Location: login.php?error=loginfail");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Welcome <?= $_SESSION['username'] ?></p>
</body>
</html>