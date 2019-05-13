<?php
	session_start();
	if (isset($_SESSION['uid'])) {
		$_SESSION['wid'] = $_GET['id'];

		require "assets/inc/dbConn.inc.php";
		$sql = "SELECT name FROM workplaces WHERE id = ".$_SESSION['wid'].";";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) === 1){
			$data = mysqli_fetch_assoc($result);
			$_SESSION['wn'] = $data['name'];
		}else{
			header("Location: menu?error=sqlerrorID");
		}
	} else {
		header("Location: login?error=access");
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
	<link rel="stylesheet" type="text/css" href="assets/css/workplace.css">
</head>
<body>
	<?php
		if(isset($_GET['id'])){
			$gate = True;
		} else {
			header("Location: login?error=unsetID");
		}
	?>
	<div id="navbar">
		<ul>
			<li><a href="menu"><i class="far fa-compass"></i></a></li>
		</ul>
	</div>
	<div id="sidebar">
		<iframe id="sidebarFrame" src="assets/iframe/workplace_sidebar"></iframe>
	</div>
</body>
</html>