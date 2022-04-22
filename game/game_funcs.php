<?php

function generatePass() {
	$result = '';
	for ($i = 0; $i < 5; $i++)
	{
		$rng = rand(0, 61);
		switch ($rng){
			case 0:
				$result .= '0';
				break;
			case 1:
				$result .= '1';
				break;
			case 2:
				$result .= '2';
				break;
			case 3:
				$result .= '3';
				break;
			case 4:
				$result .= '4';
				break;
			case 5:
				$result .= '5';
				break;
			case 6:
				$result .= '6';
				break;
			case 7: 
				$result .= '7';
				break;
			case 8:
				$result .= '8';
				break;
			case 9:
				$result .= '9';
				break;
			case 10:
				$result .= 'A';
				break;
			case 11:
				$result .= 'B';
				break;
			case 12:
				$result .= 'C';
				break;
			case 13:
				$result .= 'D';
				break;
			case 14:
				$result .= 'E';
				break;
			case 15:
				$result .= 'F';
				break;
			case 16:
				$result .= 'G';
				break;
			case 17:
				$result .= 'H';
				break;
			case 18:
				$result .= 'I';
				break;
			case 19:
				$result .= 'J';
				break;
			case 20:
				$result .= 'K';
				break;
			case 21:
				$result .= 'L';
				break;
			case 22:
				$result .= 'M';
				break;
			case 23:
				$result .= 'N';
				break;
			case 24: 
				$result .= 'O';
				break;
			case 25:
				$result .= 'P';
				break;
			case 26:
				$result .= 'Q';
				break;
			case 27: 
				$result .= 'R';
				break;
			case 28:
				$result .= 'S';
				break;
			case 29:
				$result .= 'T';
				break;
			case 30:
				$result .= 'U';
				break;
			case 31:
				$result .= 'V';
				break;
			case 32:
				$result .= 'W';
				break;
			case 33:
				$result .= 'X';
				break;
			case 34:
				$result .= 'Y';
				break;
			case 35: 
				$result .= 'Z';
				break;
			case 36:
				$result .= 'a';
				break;
			case 37:
				$result .= 'b';
				break;
			case 38:
				$result .= 'c';
				break;
			case 39:
				$result .= 'd';
				break;
			case 40:
				$result .= 'e';
				break;
			case 41:
				$result .= 'f';
				break;
			case 42:
				$result .= 'g';
				break;
			case 43:
				$result .= 'h';
				break;
			case 44:
				$result .= 'i';
				break;
			case 45:
				$result .= 'j';
				break;
			case 46:
				$result .= 'k';
				break;
			case 47: 
				$result .= 'l';
				break;
			case 48:
				$result .= 'm';
				break;
			case 49:
				$result .= 'n';
				break;
			case 50:
				$result .= 'o';
				break;
			case 51:
				$result .= 'p';
				break;
			case 52:
				$result .= 'q';
				break;
			case 53:
				$result .= 'r';
				break;
			case 54:
				$result .= 's';
				break;
			case 55:
				$result .= 't';
				break;
			case 56:
				$result .= 'u';
				break;
			case 57:
				$result .= 'v';
				break;
			case 58:
				$result .= 'w';
				break;
			case 59:
				$result .= 'x';
				break;
			case 60:
				$result .= 'y';
				break;
			case 61:
				$result .= 'z';
				break;
			default:
				echo "<p>Whoops, something didn't work quite right.</p>";
				break;
		}
	}
	return $result;
}

function generateRoomID() {
	$result = '';
	for ($i = 0; $i < 11; $i++)
	{
		$rng = rand(0, 61);
		switch ($rng){
			case 0:
				$result .= '0';
				break;
			case 1:
				$result .= '1';
				break;
			case 2:
				$result .= '2';
				break;
			case 3:
				$result .= '3';
				break;
			case 4:
				$result .= '4';
				break;
			case 5:
				$result .= '5';
				break;
			case 6:
				$result .= '6';
				break;
			case 7: 
				$result .= '7';
				break;
			case 8:
				$result .= '8';
				break;
			case 9:
				$result .= '9';
				break;
			case 10:
				$result .= 'A';
				break;
			case 11:
				$result .= 'B';
				break;
			case 12:
				$result .= 'C';
				break;
			case 13:
				$result .= 'D';
				break;
			case 14:
				$result .= 'E';
				break;
			case 15:
				$result .= 'F';
				break;
			case 16:
				$result .= 'G';
				break;
			case 17:
				$result .= 'H';
				break;
			case 18:
				$result .= 'I';
				break;
			case 19:
				$result .= 'J';
				break;
			case 20:
				$result .= 'K';
				break;
			case 21:
				$result .= 'L';
				break;
			case 22:
				$result .= 'M';
				break;
			case 23:
				$result .= 'N';
				break;
			case 24: 
				$result .= 'O';
				break;
			case 25:
				$result .= 'P';
				break;
			case 26:
				$result .= 'Q';
				break;
			case 27: 
				$result .= 'R';
				break;
			case 28:
				$result .= 'S';
				break;
			case 29:
				$result .= 'T';
				break;
			case 30:
				$result .= 'U';
				break;
			case 31:
				$result .= 'V';
				break;
			case 32:
				$result .= 'W';
				break;
			case 33:
				$result .= 'X';
				break;
			case 34:
				$result .= 'Y';
				break;
			case 35: 
				$result .= 'Z';
				break;
			case 36:
				$result .= 'a';
				break;
			case 37:
				$result .= 'b';
				break;
			case 38:
				$result .= 'c';
				break;
			case 39:
				$result .= 'd';
				break;
			case 40:
				$result .= 'e';
				break;
			case 41:
				$result .= 'f';
				break;
			case 42:
				$result .= 'g';
				break;
			case 43:
				$result .= 'h';
				break;
			case 44:
				$result .= 'i';
				break;
			case 45:
				$result .= 'j';
				break;
			case 46:
				$result .= 'k';
				break;
			case 47: 
				$result .= 'l';
				break;
			case 48:
				$result .= 'm';
				break;
			case 49:
				$result .= 'n';
				break;
			case 50:
				$result .= 'o';
				break;
			case 51:
				$result .= 'p';
				break;
			case 52:
				$result .= 'q';
				break;
			case 53:
				$result .= 'r';
				break;
			case 54:
				$result .= 's';
				break;
			case 55:
				$result .= 't';
				break;
			case 56:
				$result .= 'u';
				break;
			case 57:
				$result .= 'v';
				break;
			case 58:
				$result .= 'w';
				break;
			case 59:
				$result .= 'x';
				break;
			case 60:
				$result .= 'y';
				break;
			case 61:
				$result .= 'z';
				break;
			default:
				echo "<p>Whoops, something didn't work quite right.</p>";
				break;
		}
	}
	return $result;
}

function display_name($player) {
	$db = mysqli_connect('localhost', 'dbaccess', 'dbpass', 'gameDB');
	if (mysqli_connect_errno()){
		echo "<p>Whoops! Looks like we ran into an issue connecting to our servers, please come back later.</p>";
	}
	$query = "SELECT displayName FROM users
			  WHERE userID = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s', $player);
	$stmt->execute();
	$stmt->bind_result($name);
	
	while($stmt->fetch()) {
		echo $name;
	}
}

function show_room() {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Awful Authors</title>
			<link rel="stylesheet" type="text/css" href="styles.css"/>
		</head>
		<body>
			<article class="card-deck">
				<div class="small-card deck-element">
					<h1>Player 1</h1>
					<hr/>
					<br/><br/>
					<h2><?php 
							$query = "SELECT player1 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player2</h1>
					<hr/>
					<br/><br/>
					<h2><?php 
							$query = "SELECT player2 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player 3</h1>
					<hr/>
					<br/><br/>
					<h2><?php 
							$query = "SELECT player3 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player 4</h1>
					<hr/>
					<br/>
					<h2><?php 
							$query = "SELECT player4 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player 5</h1>
					<hr/>
					<br/>
					<h2><?php 
							$query = "SELECT player5 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player 6</h1>
					<hr/>
					<br/>
					<h2><?php 
							$query = "SELECT player6 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player 7</h1>
					<hr/>
					<br/>
					<h2><?php 
							$query = "SELECT player7 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
				<div class="small-card deck-element">
					<h1>Player 8</h1>
					<hr/>
					<br/><br/>
					<h2><?php 
							$query = "SELECT player8 FROM rooms 
									  WHERE roomCode = ?";
							$stmt = $db->prepare($query);
							$stmt->bind_param('s', $code);
							$stmt->execute();
							$stmt->bind_result($p);
							while($stmt->fetch()) {
								if (is_null($p)) {
									echo 'Waiting for player';
								} else {
									display_name($p);
								}
							}
					    ?></h2><!-- name -->
				</div>
			</article>
		</body>
	</html>
	<?php
}
?>
