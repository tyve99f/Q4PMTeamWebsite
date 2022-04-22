<?php
session_start();
require_once('game_funcs.php');



$userid = session_id();
$username = $_POST['display_name'];

$db = mysqli_connect('localhost', 'dbaccess', 'dbpass', 'gameDB');
if (mysqli_connect_errno()) {
	echo "<p>Whoops, we ran into an issue trying to connect to our databases, please try again later!</p>";
	exit;
}
if ($username != ''){
	$query = "INSERT INTO users (userID, displayName)
	  VALUES (?, ?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param('ss', $userid, $username);
	$stmt->execute();
	$db->close();
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Awful Authors</title>
			<link rel="stylesheet" type="text/css" href="styles.css"/>
		</head>
		<body>
			<header>Awful Authors</header>
			<br/><br/>
			<article class="card-pile">
				<div class="card">
					<h1>Join an existing room</h1>
			
					<form action="room.php" method="post">
						<input type="text" size="10" maxlength="5" name="room_code" placeholder="Room code" />
						<input type="hidden" name="user_id" value="<?php echo $userid?>"/>
						<input type="hidden" name="created" value="No" />
						<button type="submit">Join</button>
					</form>

				</div>
				<div class="card">
					<h1>Create a new room</h1>
					
					<form action="room.php" method="post">
						<input type="hidden" name="host_id" value="<?php echo $userid ?>"/>
						<input type="hidden" name="created" value="Yes" />
						<button type="submit">Create</button>
					</form>
				</div>
			</article>
		</body>
	</html>	
	<?php
} else { 
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Awful Authors</title>
			<link rel="stylesheet" type="text/css" href="styles.css"/>
		</head>
		<body>
			<header>Awful Authors</header>
			<br/><br/>
			<p>You must enter a username, please go <a href="index.html">back</a> and try again.</p>
		</body>
	</html>
	<?php
	exit;
}

?>

