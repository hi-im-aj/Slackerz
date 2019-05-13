<?php
	session_start();
	if (isset($_SESSION['wid'])) {} else {
		header("Location: ../../login?error=access");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slackerz: Workplace</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/init.css">
	<link rel="stylesheet" type="text/css" href="../css/workplace_sidebar.css">
</head>
<body>
	<div id="header">
		<h1><?php echo $_SESSION['wn']; ?><span>.</span></h1>
		<p id="username"><?php echo $_SESSION['username']; ?></p>
	</div>
	<div id="channels">
		<h1>Channels</h1>
		<a id="addChannel" href="../inc/createChannel"><i class="far fa-plus-square"></i></a>
		<ul>
			<?php

			?>
			<li><a href="#">TEST</a></li>
		</ul>
	</div>
	<div id="members">
		<h1>Members</h1>
		<a href="../inc/addMember"><i class="fas fa-user-plus"></i></a>
		<ul>
			<li><p><?php echo $_SESSION['username']; ?> (you)</p></li>
			<?php

			?>
		</ul>
	</div>
</body>
</html>