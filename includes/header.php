<?php
		include("includes/config.php");
		include("includes/classes/User.php");
		include("includes/classes/Artist.php");
		include("includes/classes/Album.php");
		include("includes/classes/Song.php");
		include("includes/classes/Playlist.php");
//session_destroy();
if(isset($_SESSION['userLoggedIn']))
{
	$userLoggedIn = new User($conn,$_SESSION['userLoggedIn']);
	$username=$userLoggedIn->getUser();
	echo "<script>userLoggedIn='$username';</script>";
}
else
{
	header("Location: register.php");
}

?>
<html>
<head>
	<title>Welcome to Geenth!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="icon" 
      type="image/png" 
	    href="../assets/images/geenth.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>></script>
	<script src='assets/script/script.js'></script>
</head>
<body>



	<div id="mainContainer">
		<div id="topContainer">
			<?php
				include("includes/containers/navBarContainer.php");
			?>
			<div id="mainViewContainer">
				
			
			<div id="mainContent">
