<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slackerz: Log In</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/init.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/loginSignup.css">
</head>
<body>
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
	<?php
		if(isset($_GET['signup'])){
			if($_GET['signup'] == "success"){
				echo "<p class='successField'>Account created successfully!</p>";
			}
		} elseif(isset($_GET['error'])){
			if($_GET['error'] == "sqlerror"){
				echo "<p class='errorField'>Server error!</p>";
			} elseif($_GET['error'] == "invalidpass"){
				echo "<p class='errorField'>Incorrect password!</p>";
			} elseif($_GET['error'] == "nouser"){
				echo "<p class='errorField'>No such user!</p>";
			}
		}
	?>
	<div id="wrapper">
		<div id="leftWrapper">
			<img id="loginImg" src="assets/img/login.png">
		</div>
		<div id="rightWrapper">
			<form method="post" action="assets/inc/login.inc.php">
			<h1 id="formTitle">Log in</h1>
			<div class="textBox" id="liUsername">
				<i class="fas fa-user"></i>
				<input placeholder="Username" type="text" name="li-username" required>
			</div>
			<div class="textBox" id="liPassword">
				<i class="fas fa-lock"></i>
				<input placeholder="Password" type="password" name="li-password" required>
			</div>
			<div class="buttonBox" id="liSub">
				<button type="submit" name="li-submit">Log In</button>
			</div>
		</form>
		</div>
	</div>
</body>
</html>