<?php 


	require 'connection.php';
	$index = $_POST['index'];
	$sql = "SELECT * FROM items WHERE id='$index'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	extract($row);

	

	echo "<div class='container'>";
	echo	"<div class='row'>";
	echo		"<form class='col l10 offset-l1' method='POST' action='delete.php?index=$index'>";
	echo 			"<div class='center-align'><img src='$image' class='imgMenu'></div>";
	echo			"<div class='input-field'><input disabled type='text' name='name' value='$name'><label class='active'>Name:</label></div>";
	echo			"<div class='input-field'><textarea disabled class='materialize-textarea' name='description'>$description</textarea><label class='active'>Description:</label></div>";
	echo			"<div class='input-field'><input disabled type='number' min=0 value='$price' name='price'><label class='active'>Price (Php): </label></div><div class='modal-footer'>
				<p>Are you sure you want to delete this item?</p>
				<input type='button' class='waves-effect waves-light red lighten-2 btn modal-close' value='Cancel'>
				<input type='submit' class='waves-effect waves-light purple lighten-2 btn' value='Yes'>
			</div>";
	echo		"</form>";
	echo	"</div>";
	echo "</div>";



?>