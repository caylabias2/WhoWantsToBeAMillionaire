<?php
	session_start();
	
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$score = $_SESSION["score"];
	$money = $_SESSION["money"];
	$answer = $_POST["answer"];
	$file = "playerdata.txt";
	
	if($answer == "incorrect") {
		$allplayerdata = file($file);
		$newdata = "";
		
		foreach($allplayerdata as $playerinfoline){
			$individualplayerinfo = explode(",", $playerinfoline);

			if($individualplayerinfo[0] == $username){
				$individualplayerinfo[1] = $password;
				$individualplayerinfo[2] = $score;
				$individualplayerinfo[3] = $money;
				$newdata .= implode(",", $individualplayerinfo) . "\r\n";
			}
			else {
				$newdata .= $playerinfoline;
			}
		}
		
		$openfile = fopen("playerdata.txt", "w"); 
		fwrite($openfile, $newdata);
		fclose($openfile);
		
		header("location: gameover.php");
		exit();
	}
?>
