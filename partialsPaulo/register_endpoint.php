<?php 
require 'connection.php';

$username = $_POST['regName'];
$password = sha1($_POST['password']);


$sql = "INSERT INTO users (username,password,role) VALUES ('$username','$password','user')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));


// $string = file_get_contents('assets/users.json');
// $users = json_decode($string, true);

// $users[$username] = $password;

// $file = fopen('assets/users.json', 'w');
// fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
// fclose($file);

session_start();
$_SESSION['username'] = $username;
$_SESSION['role'] = 'user';
header('location: items.php');



?>