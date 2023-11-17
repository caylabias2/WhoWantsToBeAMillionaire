<?php
	session_start();
	
	$username = $_SESSION["username"];
	$score = $_SESSION["score"];
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" href = "wwtbam.css">
		<title> WHO WANTS TO BE A MILLIONAIRE? </title>
	</head>
	<body>
		<div id = "main">
			<h1> Who Wants To Be A Millionaire?? </h1>
			<img class = "logo" src = "wwtbamlogo.png" alt = "logo">
			<br>
			<h2 id = "header"><span id = "green">WINNER WINNER</span> CHICKEN DINNER!!</h2>
			<h3>CONGRATS!! <?= $username ?>, YOU ARE A <span id ="green">MILLIONAIRE!!</span></h3>
			<p> You can either view the leaderboard or logout</p>
			<p><span id = "green">THANKS FOR PLAYING!!!</span></p>
			<br>
			
			<div class = "form2">
				<a class = "footlink" href = "leaderboard.php">Leaderboard</a>
				<a class = "footlink" href = "logout.php">Logout</a>
			</div>
		</div>
	</body>
</html>