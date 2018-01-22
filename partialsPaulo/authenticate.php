<?php 
	// $string = file_get_contents("assets/users.json");
	// $users = json_decode($string, true);

	require "connection.php";

	
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $row['Role'];
		header('location: items.php');
	}

	function display_title() {
		echo "Log In";
	}	

	function display_content() {
		echo "<div class='container'>";
		echo "<div class='row'>";
		echo "<form class='col l6 offset-l3' method='POST'>
		<div class='input-field'><label>Username:</label>
		<br><input type='text' id='username' name='username' autofocus required></div>
		<p id='wrongP'>Invalid Credentials. Try again.<br></p>
		<div class='input-field'><label>Password:</label><br><input type='password' name='password' required></div>
		<input class='waves-effect waves-light btn deep-orange lighten-2' type='submit' name='submit' value='Log-In'>
		</form></div>";
		echo "<div class='row'><div class='col l6 offset-l3'><h5>Don't have an account yet?<br> <a href='http://localhost/partialsPaulo/register.php'>Register Here!</a></h5></div></div>";
	}
	require 'template.php';


?>

