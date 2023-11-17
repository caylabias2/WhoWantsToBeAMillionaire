<?php
	session_start();
	
	include 'checkanswer.php';
	
	$_SESSION["score"] = 4;
	$_SESSION["money"] = 10000;
	
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
			<h2 class = "money"> $25000 </h2>
			<h2 class = "question">What NBA has completed TWO Championship threepeats (win three Championships consecutively)?</h2>
		
			<div id = "whole">
				<div id = "left">
					<ul>
						<li> <span>A.</span> Bulls </li>
						<li> <span>B.</span> Celtics </li>
						<li> <span>C.</span> Warriors </li>
						<li> <span>D.</span> Lakers </li>
					</ul>

					<form action = "question6.php" method = "post">
						<label for = "A">A</label>
						<input type = "radio" id = "A" name = "answer" value = "correct">
						<label for = "B">B</label>
						<input type = "radio" id = "B" name = "answer" value = "incorrect">
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