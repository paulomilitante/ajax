<?php 

$username = $_POST['regName'];
$password = $_POST['password'];

$string = file_get_contents('assets/users.json');
$users = json_decode($string, true);

$users[$username] = $password;

$file = fopen('assets/users.json', 'w');
fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
fclose($file);

session_start();
$_SESSION['username'] = $username;
header('location: items.php');



?>