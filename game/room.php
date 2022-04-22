<?php
require_once('game_funcs.php');

session_start();
$created = $_POST['created'];
$user_id = $_POST['user_id'];
$code = $_POST['room_code'];


$db = mysqli_connect('localhost', 'dbaccess', 'dbpass', 'gameDB');
if (mysqli_connect_errno()) {
	echo "<p>Whoops, looks like we weren't able to connect to our database, please try again later.</p>";
	exit;
}

$room_id = generateRoomID();
$room_code = generatePass();
if ($created == "Yes") { //If the player is the host...
	$host = $_POST['host_id'];
	$query = "INSERT INTO rooms (roomID, roomCode, hostPlayer, player1)
			  VALUES (?, ?, ?, ?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param('ssss', $room_id, $room_code, $host, $host);
	$stmt->execute();
	show_room();
} else if ($created == "No") { //If the player is not the host...
	$query = "SELECT player2, player3, player4, player5, player6, player7, player8 FROM rooms 
			  WHERE roomCode = ?";
	$stmt = $db->prepare($query);
	$stmt->bind_param('s', $code);
	$stmt->execute();
	$stmt->bind_result($p2, $p3, $p4, $p5, $p6, $p7, $p8);
	$result = $stmt->get_result();
	$players = $result->fetch_assoc();
	if (is_null($players['player2'])) { // If there is no player 2...
		$newquery = "UPDATE rooms
					 SET player2 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
		show_room();
	} else if (is_null($players['player3'])) { // If there is no player 3...
		$newquery = "UPDATE rooms
					 SET player3 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
	} else if (is_null($players['player4'])) {  // If there is no player 4...
		$newquery = "UPDATE rooms
					 SET player4 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
		show_room();
	} else if (is_null($players['player5'])) { // If there is no player 5...
		$newquery = "UPDATE rooms
					 SET player5 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
		show_room();
	} else if (is_null($players['player6'])) { // If there is no player 6...
		$newquery = "UPDATE rooms
					 SET player6 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
		show_room();
	} else if (is_null($players['player7'])) { // If there is no player 7...
		$newquery = "UPDATE rooms
					 SET player7 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
		show_room();
	} else if (is_null($players['player8'])) { // If there is no player 8...
		$newquery = "UPDATE rooms
					 SET player8 = ?
					 WHERE roomCode = ?";
		$newstmt = $db->prepare($newquery);
		$newstmt->bind_param('ss', $user_id, $code);
		$newstmt->execute();
		show_room();
	}
}
?>