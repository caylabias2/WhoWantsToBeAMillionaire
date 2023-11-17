<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel = "stylesheet" href = "wwtbam.css">
		<title>WHO WANTS TO BE A MILLIONAIRE??</title>
	</head>
	<body>
		<?php
			$error = "";
			if(isset($_POST['submit'])){
				$username = $_POST["username"];
				$password = $_POST["pwd"];
				$confirmpassword = $_POST["pwd2"];
				$score = 0; 
			
				if ($password != $confirmpassword){
					$error = "<span style='color:red'>Passwords DON'T match! Please try again.</span>";
				}
				else{
					$playerdata = fopen("playerdata.txt","a");
					$newplayerdata = $username . "," . $password . "," . $score;
					fwrite($playerdata, $newplayerdata . "\r\n");
					header("location:index.php");
				}
			}
			
		?>
		<div id = "main">
			<h1>Who Wants To Be a Millionare??</h1>
			<img class = "logo" src = "wwtbamlogo.png" alt = "logo"><br>

			<h2 id = "header">Register Here To Get Started</h2>
			<p>If Already Registered Go To <a href = "index.php">Login Page</a></p>

			<div class = "form">
				<form action = "" method = "post">
					<label for = "username">Username:</label>
					<input type = "text" id = "username" name = "username" size = "16"><br><br>

					<label for = "pwd">Password:</label>
					<input type = "password" id = "pwd" name = "pwd" size = "16"><br><br>

					<label for = "pwd2">Confirm Password:</label>
					<input type = "password" id = "pwd2" name = "pwd2" size = "16"><br><br>

					<input type = "submit" id = "submit" name = "submit" value = "Get Registered"><br>
				</form>
				<?php
				if(isset($error)){
					echo $error;
				}
				?>
			</div>
		</div>
	</body>
</html>
