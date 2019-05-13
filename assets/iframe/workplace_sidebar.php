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
	<div id="listBody">
		<ul class="List1">
		<li class="iHeader"><h1>Channels</h1><i class="far fa-plus-square addButton" id="addChannel"></i></a></li>
		<li class="Push1 listItem"><p>Channel Example 1</p></li>
		<li class="Push1 listItem"><p>Channel Example 2</p></li>
		<?php

		?>
		<br>
		</ul>
		<ul class="List1">
			<li class="iHeader"><h1>Members</h1><i class="fas fa-user-plus addButton" id="addMember"></i></a></li>
			<li class="Push1 listItem"><p><?php echo $_SESSION['username']; ?> (you)</p></li>
			<?php

			?>
		<br>
		</ul>
	</div>
</body>
</html>