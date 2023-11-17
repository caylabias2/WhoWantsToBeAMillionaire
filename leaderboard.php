<?php
    $allplayerdata = file("playerdata.txt");
    $leaderboard = array();
    
    foreach($allplayerdata as $playerinfoline){
        $individualplayerinfo = explode(",", $playerinfoline);
        $username = $individualplayerinfo[0];
        $score = intval($individualplayerinfo[2]); 
        $money = $individualplayerinfo[3];
            
        $leaderboard[$username] = array(
            "score" => $score,
            "money" => $money
        );
    }
    
    arsort($leaderboard); 
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="wwtbam.css">
		<title>WHO WANTS TO BE A MILLIONAIRE??</title>
	</head>
	<body>
		<div id = "main">
			<h1>Who Wants To Be A Millionaire??</h1>
			<img class = "logo" src = "wwtbamlogo.png" alt = "logo">
			<br>
			<h2>Leaderboard</h2>
			<div id = "table">
				<table>
					<tr>
						<th>Rank</th>
						<th>Username</th>
						<th>Score</th>
						<th>Money Earned</th>
					</tr>
				<?php
					$rank = 1;
					foreach ($leaderboard as $username => $data){
						if($rank <= 4) {
							echo '
							<tr>
								<td>' . $rank . '</td>
								<td>' . $username . '</td>
								<td>' . $data["score"] . '</td>
								<td>' . $data["money"] . '</td>
							</tr>';
							$rank++;
						}
						else {
							break;
							}
						}
				?>
				</table>
				<br>
			</div>
			<div class = "form2">
				<a class = "footlink bigger" href="homepage.php">Try Again</a>
				<a class = "footlink bigger" href="logout.php">Logout</a>
			</div>
		</div>
	</body>
</html>
