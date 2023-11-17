<?php
	session_start();
	
	include 'checkanswer.php';
	
	$_SESSION["score"] = 8;
	$_SESSION["money"] = 250000;
	
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
			<h2 class = "money"> $500000 </h2>
			<h2 class = "question">The Earth is approximately how many miles away from the Sun?</h2>
			
			<div id = "whole">
				<div id = "left">
					<ul>
						<li> <span>A.</span> 9.3 million </li>
						<li> <span>B.</span> 93 million </li>
						<li> <span>C.</span> 139 million </li>
						<li> <span>D.</span> 39 million </li>
					</ul>
					
					<form action = "question10.php" method = "post">
						<label for = "A">A</label>
						<input type = "radio" id = "A" name = "answer" value = "incorrect">
						<label for = "B">B</label>
						<input type = "radio" id = "B" name = "answer" value = "correct">
						<label for = "C">C</label>
						<input type = "radio" id = "C" name = "answer" value = "incorrect">
						<label for = "D">D</label>
						<input type = "radio" id = "D" name = "answer" value = "incorrect">
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