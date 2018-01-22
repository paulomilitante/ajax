<?php

$index = $_GET['index'];

require 'connection.php';
$sql "DELETE FROM items WHERE id = '$index'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header("location: items.php");



?>