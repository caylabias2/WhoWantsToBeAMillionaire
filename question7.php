<?php
	session_start();
	
	include 'checkanswer.php';
	
	$_SESSION["score"] = 6;
	$_SESSION["money"] = 50000;
	
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
			<h2 class = "money"> $100000 </h2>
			<h2 class = "question">How many movies are in the MCU (Marvel Cinematic Univserse)?</h2>
			
			<div id = "whole">
				<div id = "left">
					<ul>
						<li> <span>A.</span> 29</li>
						<li> <span>B.</span> 30 </li>
						<li> <span>C.</span> 27 </li>
						<li> <span>D.</span> 33</li>
					</ul>

					<form action = "question8.php" method = "post">
						<label for = "A">A</label>
						<input type = "radio" id = "A" name = "answer" value = "incorrect">
						<label for = "B">B</label>
						<input type = "radio" id = "B" name = "answer" value = "incorrect">
						<label for = "C">C</label>
						<input type = "radio" id = "C" name = "answer" value = "incorrect">
						<label for = "D">D</label>
						<input type = "radio" id = "D" name = "answer" value = "correct">
						<br>
						<input type = "submit" id = "submit" value = "Submit Answer">
					</form>
				</div>
				<div id = "right">
					<img class = "logo" src = "wwtbamlogo.png" alt = "logo">
				</div>
			</div>
		</div>
	</body>
</html>