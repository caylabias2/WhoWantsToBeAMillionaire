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
			<h2 id = "header">GAME <span>OVER!!</span></h2>
			<h3>SORRY <?= $username ?>, YOU CHOSE THE <span>WRONG ANSWER</span></h3>
			<p> You can try again, view the leaderboard, or logout </p>
			<p><span id = "green">THANKS FOR PLAYING!!!</span></p>
			<p><span>*WARNING: If You Attempt Again Your Previous Score<br> Will Be Overwritten Even If It Is Lower*</span></p>
			<br>
		
			<div class = "form">
				<a class = "footlink" href = "homepage.php">Try Again</a>
				<a class = "footlink" href = "leaderboard.php">Leaderboard</a>
				<a class = "footlink" href = "logout.php">Logout</a>
			</div>
		</div>
	</body>
</html>