<?php
	session_start();
	
	$score = 0;
	$money = 0;
	
	$_SESSION["score"] = $score;
	$_SESSION["money"] = $money;
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" href = "question.css">
		<title> WHO WANTS TO BE A MILLIONAIRE </title>
	</head>
	<body>
		<div class = "main">
			<h1 id = "h1">Who Wants To Be A <span>Millionare??</span></h1>
			<h2 class = "money"> $1000 </h2>
			<h2 class = "question">How many stars and stripes are on the American Flag?</h2>
			
			<div id = "whole">
				<div id = "left">
					<ul>
						<li> <span>A.</span> 13 stars and 50 stripes </li>
						<li> <span>B.</span> 48 stars and 10 stripes </li>
						<li> <span>C.</span> 50 stars and 13 stripes </li>
						<li> <span>D.</span> 20 stars and 13 stripes </li>
					</ul>
					
					<form action = "question2.php" method = "post">
						<label for = "A">A</label>
						<input type = "radio" id = "A" name = "answer" value = "incorrect">
						<label for = "B">B</label>
						<input type = "radio" id = "B" name = "answer" value = "incorrect">
						<label for = "C">C</label>
						<input type = "radio" id = "C" name = "answer" value = "correct">
						<label for = "D">D</label>
						<input type = "radio" id = "D" name = "answer" value = "incorrect">
					<div id = "submitbutton">
						<input type = "submit" id = "submit" value = "Submit Answer">
					</div>
					</form>
				</div>
				<div id = "right">
					<img class = "logo" src = "wwtbamlogo.png" alt = "logo">
				</div>
			</div>
		</div>
	</body>
</html>