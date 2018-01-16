<?php 
function display_title() {
	echo "Log In";
}

function display_content() {
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<form class='col l6 offset-l3' method='POST' action='authenticate.php'>
	<div class='input-field'><input type='text' name='username' autofocus required><label>Username:</label></div>
	<div class='input-field'><input type='password' name='password' required><label>Password:</label></div>
	<input class='waves-effect waves-light btn deep-orange lighten-2' type='submit' name='submit' value='Log-In'>
</form></div>";
	echo "<div class='row'><div class='col l6 offset-l3'><h5>Don't have an account yet?<br><a href='http://localhost/Paulo/partialsPaulo/register.php'>Register Here!</a></h5></div></div>";

}

require 'template.php';
?>