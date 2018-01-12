<?php 
session_start();
session_destroy();

function display_title() {
	echo "Logout";
}

function display_content() {
	echo "<h2 class='center-align'>You have logged out!<br><h6 class='center-align'>Go back to <a href='login.php'>Log-In</a> page or <a href='register.php'>Register</a> new account now!<h6></h2>";

}

require 'template.php';
?>