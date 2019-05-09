<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header("Location: menu");
	} else {}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slackerz: Collaboration is everything</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/init.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
	<div id="shapes">
		<img id="shape1" src="assets/img/shapes/shape1.png">
		<img id="shape2" src="assets/img/shapes/shape2.png">
	</div>
	<div id="navbar">
		<div id="navLeft">
			<img id="navLogo" src="">
			<a href="index"><h1 id="navTitle">Slackerz<span id="navTitleSpan">.</span></h1></a>
		</div>
		<div id="navRight">
			<ul class="navList" id="navList1">
				<li><a href="#">Product</a></li>
				<li><a href="#">Discover</a></li>
				<li><a href="#">Platform</a></li>
				<li><a href="#">Support</a></li>
				
			</ul>
			<ul class="navList" id="navList2">
				<li id="loginItem"><a href="login">Login</a></li>
				<li id="signupItem"><a href="signup">Sign up</a></li>
			</ul>
		</div>
	</div>
	<div id="wrapper1">
		<div id="leftWrapper1">
			<h1>The collaboration software that moves work forward.</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<a href="signup">Sign up</a>
		</div>
		<div id="rightWrapper1">
			<img src="assets/img/statusUpdate.png">
		</div>
	</div>
</body>
</html>