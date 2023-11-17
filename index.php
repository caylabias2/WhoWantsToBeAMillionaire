<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" href = "wwtbam.css">
		<title>WHO WANTS TO BE A MILLIONARE?? </title>
	</head>
	<body>
		<?php
		
			if(isset($_POST['submit'])){
				$username = $_POST['username'];
				$password = $_POST['pwd'];
			
				$userCredentials = array();
				
				$playerdata = file("playerdata.txt");
				foreach($playerdata as $line){
					$eachplayer = explode(",", $line);
					$playersname = trim($eachplayer[0]);
					$playerspassword = trim($eachplayer[1]);
					$userCredentials[$playersname] = $playerspassword;
				}
				
				
				if (isset($userCredentials[$username]) && $userCredentials[$username] == $password){
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password;
					header("location: homepage.php");
					exit;
				}
				else{
					$msg = "<span style='color:red'>Invalid Player Info Please Try Again</span>";
				
				}
			}
?>
		<div id = "main">
			<h1>Who Wants To Be A Millionare??</h1>
			<img class = "logo" src = "wwtbamlogo.png" alt = "logo">
			
			<br><h2 id = "header">Login to Play or <a href = "register.php">Register Here</a></h2><br>
			
			<div class = "form">
				<form action = "" method = "post">
					<label for = "username">Username:</label>
					<input type = "text" id = "username" name = "username" size = "16"><br><br>
					
					<label for = "pwd">Password:</label>
					<input type = "password" id = "pwd" name = "pwd" size = "16"><br><br>
					
					<input type = "submit" id = "submit" name = "submit" value = "Login"><br>
				</form>
				<?php
					if(isset($msg)){
						echo $msg;	
					}
				?>
			</div>
		</div>
	</body>
</html>