<?php 
function display_title() {
	echo "Register";
}

function display_content() {
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<form class='col l6 offset-l3' method='POST' action='register_endpoint.php'>
			<div class='input-field'>
				<input type='text' name='fullName' autofocus required>
				<label>Full Name:<label>
			</div>
			<div class='input-field'>
				<input type='text' name='regName' required>
				<label>Username:<label>
			</div>
			<div class='input-field'>
				<input type='password' id='regPW' name='password' required>
				<label>Password:<label>
			</div>
			<div class='input-field'>
				<input type='password' id='regCPW' name='cPassword'>
				<label>Confirm Password:<label>
			</div>
				<p id='dnMatch' hidden>Passwords don't match!</p>
			<div class='input-field'>
				<input type='submit' class='waves-effect waves-light btn deep-orange lighten-2' id='regBtn' name='register' value='Register'>
			</div>
	</form>";
	

}

require 'template.php';
?>
