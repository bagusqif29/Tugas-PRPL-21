<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>

</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Dashboard</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<br>
	<label>	Your account, joined <?php 	echo $user_data['history'];?></label>
</body>
</html>