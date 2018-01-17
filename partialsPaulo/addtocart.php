<?php 

session_start();

$index = $_GET['index'];
$quantity = $_POST['quantity'];

isset($_SESSION['cart'][$index]) ? $_SESSION['cart'][$index] += $quantity :
$_SESSION['cart'][$index] = $quantity;

// print_r($_SESSION['cart']);



header("location: items.php");



?>