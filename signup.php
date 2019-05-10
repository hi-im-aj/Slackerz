<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		header("Location: menu");
	} else {}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slackerz: Create Account</title>
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
		if(isset($_GET['error'])){
			if($_GET['error'] == "invalidemailusername"){
				echo "<p class='errorField'>Invalid username and email!</p>";
			} elseif($_GET['error'] == "invalidemail"){
				echo "<p class='errorField'>Invalid email!</p>";
			} elseif($_GET['error'] == "invalidusername"){
				echo "<p class='errorField'>Invalid username!</p>";
			} elseif($_GET['error'] == "passconfirm"){
				echo "<p class='errorField'>Passwords does not match!</p>";
			} elseif($_GET['error'] == "sqlerror"){
				echo "<p class='errorField'>Server error!</p>";
			} elseif($_GET['error'] == "userexist"){
				echo "<p class='errorField'>Username is already taken!</p>";
			}
		}
	?>
	<div id="wrapper">
		<div id="leftWrapper">
			<img id="signupImg" src="assets/img/profileData.png">
		</div>
		<div id="rightWrapper">
			<form method="post" action="assets/inc/signup.inc.php">
			<h1 id="formTitle">Sign up</h1>
			<div class="textBox" id="caUsername">
				<i class="fas fa-user"></i>
				<input placeholder="Username" type="text" name="ca-username" required>
			</div>
			<div class="textBox" id="caEmail">
				<i class="fas fa-envelope"></i>
				<input placeholder="Email" type="email" name="ca-email" required>
			</div>
			<div class="textBox" id="caPass">
				<i class="fas fa-lock"></i>
				<input placeholder="Password" type="password" name="ca-password" required>
			</div>
			<div class="textBox" id="caPass2">
				<i class="fas fa-lock-open"></i>
				<input placeholder="Confirm password" type="password" name="ca-password2" required>
			</div>
			<div class="buttonBox" id="caSub">
				<button type="submit" name="ca-submit">Create Account</button>
			</div>
		</form>
		</div>
	</div>
</body>
</html>