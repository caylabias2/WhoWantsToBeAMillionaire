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
		<div class="bg">
			<img src="background.jpg" alt="">
		</div>
		
		<div id = "relative">
			<h1>Who Wants to Be a Millionare??</h1>
			<img class = "logo" src = "wwtbamlogo.png" alt = "logo"><br>
			
			<h3> Welcome to Who Wants to Be a Millionaire?</h3>
			<h3> Hello Contestant: <?= $_SESSION["username"]?> </h3>
			<p> To get started read the rules and hit PLAY! </p>
			<p> You can also view the leaderboard or logout</p>
			<h2> Rules: </h2>
			<p> Answer 10  Questions <span id = "green">CORRECTLY</span> to BECOME A MILLIONAIRE!! </p>
			<p> Get one <span>WRONG</span> and it's GAME OVER </p>
			
			<div class = "form">
				<a class = "footlink" href = "question1.php">Play</a>
				<a class = "footlink" href = "leaderboard.php">Leaderboard</a>
				<a class = "footlink" href = "logout.php">Logout</a>
			</div>
			
			
		</div>
	</body>
</html>