<?php
	session_start();
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	} else {
		header("Location: login?error=loginfail");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slackerz: Workplace</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/init.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navbar2.css">
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
</head>
<body>
	<div id="navbar">
		<div id="leftNav">
			<a href="index"><h1>Slackerz<span>.</span></h1></a>
		</div>
		<div id="centerNav">
			<img src="assets/avatar/default.png">
			<p id="username"><?= $_SESSION['username'] ?></p>
		</div>
		<div id="rightNav">
			<ul>
				<li><a href="assets/inc/logout.inc.php"><i class="fas fa-sign-out-alt"></i></a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div id="workplaceList">
			<ul>
				<li><a href="assets/inc/workplaceRedir"><button>Workplace Name</button></a></li>
				<li><a href="assets/inc/workplaceRedir"><button>Workplace Name</button></a></li>
			</ul>
			<?php

			?>
		</div>
	</div>
	<div id="interface">
		<button id="CW_btn">Create Workplace</button>
	</div>
	<div id="CW_modal">
		<div id="CW_interface">
			<i id="CW_exit" class="fas fa-times"></i>
			<form method="post" action="assets/inc/createWorkplace.php">
				<div id="CW_name">
					<input placeholder="Workplace name" type="text" name="cw-name">
				</div>
				<div id="CW_submit">
					<button name="cw-submit" type="submit">Create Workplace</button>
				</div>
			</form>
		</div>
	</div>
</body>
<script type="text/javascript" src="assets/js/menu.js"></script>
</html>