<?php
	session_start();
	if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
	header("location:index.php");
	exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel = "stylesheet" href = "wwtbam.css">
		<title>WHO WANTS TO BE A MILLIONAIRE</title>
	</head>
	<body>
		<div id = "main">
			<h1>Who Wants To Be A Millionare??</h1>
			<img class = "logo" src = "wwtbamlogo.png" alt = "logo"><br>
			
			<h3> Welcome to Who Wants To Be A Millionaire?</h3>
			<h3> Hello Contestant: <?= $_SESSION["username"]?> </h3>
			<p class = "bigger"> To get started read the rules and hit PLAY! </p>
			<p class = "bigger"> You can also view the leaderboard or logout</p>
			<h3> Rules: </h3>
			<p> Answer 10  Questions <span id = "green">CORRECTLY</span> to BECOME A MILLIONAIRE!! </p>
			<p class = "bigger"> Get one <span>WRONG</span> and it's GAME OVER </p><br>
			
			<div class = "form">
				<a class = "footlink bigger" href = "question1.php">Play</a>
				<a class = "footlink bigger" href = "leaderboard.php">Leaderboard</a>
				<a class = "footlink bigger" href = "logout.php">Logout</a>
			</div>
		</div>
	</body>
</html>