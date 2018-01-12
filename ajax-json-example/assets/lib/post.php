<?php 

$name = $_POSTx['name'];


$users = [
		['name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@gmail.com', 'password' => 'abc123'],
		['name' => 'John Smith', 'email' => 'john.smith@gmail.com', 'password' => 'xyz234'],
		['name' => 'John Doe', 'email' => 'john.doe@gmail.com', 'password' => 'thu456'],
];

foreach ($users as $key => $value) {
	if ($value['name'] === $name) {
		echo 'Your name was found';
		break;
	}
}

?>