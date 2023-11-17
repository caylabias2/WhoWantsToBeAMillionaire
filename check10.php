<?php
	session_start();
	
	include 'checkanswer.php';
	
	$_SESSION['score'] = 10;
	$_SESSION['money'] = 1000000;
	
	$money = $_SESSION['money'];
	$score = $_SESSION['score'];
	
	if ($answer == "correct"){
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
		header("location: winner.php");
		exit();
	}
	
?>
