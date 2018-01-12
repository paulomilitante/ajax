<?php 
function display_title() {
	echo "Register";
}

function display_content() {
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<form class='col l6 offset-l3' method='POST' action='register_endpoint.php'>
	Full Name:<br>
	<input type='text' name='fullName' placeholder='Enter Full Name' required><br>
	Username:<br>
	<input type='text' name='regName' placeholder='Enter Username' required><br>
	Password:<br>
	<input type='password' id='regPW' name='password' placeholder='Enter Password' required><br>
	Confirm Password:<br>
	<input type='password' id='regCPW' name='cPassword' placeholder='Confirm Password'><p id='dnMatch' hidden>Does not match password!</p><br>
	<input type='submit' id='regBtn' name='register' value='Register'>
	</form>";
	

}

require 'template.php';
?>
