<?php 


	$string = file_get_contents("assets/items.json");
	$items = json_decode($string, true);

	$index = $_POST['index'];
	$img = $items[$index]['img'];
	$name = $items[$index]['name'];
	$description = $items[$index]['description'];
	$price = $items[$index]['price'];

	echo "<div class='container'>";
	echo	"<div class='row'>";
	echo		"<form class='col l10 offset-l1' method='POST' action='edit.php?index=$index'>";
	echo 			"<div class='center-align'><img src='$img' class='imgMenu'></div>";
	echo			"<div class='input-field'><input type='text' name='name' value='$name'><label class='active'>Name:</label></div>";
	echo			"<div class='input-field'><textarea class='materialize-textarea' name='description'>$description</textarea><label class='active'>Description:</label></div>";
	echo			"<div class='input-field'><input type='number' min=0 value='$price' name='price'><label class='active'>Price (Php): </label></div><div class='modal-footer'>
				<input type='button' class='waves-effect waves-light deep-orange lighten-2 btn modal-close' value='Cancel'>
				<input type='submit' class='waves-effect waves-light green lighten-2 btn' value='Save'>
			</div>";
	echo		"</form>";
	echo	"</div>";
	echo "</div>";



?>