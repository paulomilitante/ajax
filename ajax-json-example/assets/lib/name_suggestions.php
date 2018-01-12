<?php 


$names = [
	'Dan', 'Dan P.', 'Jeremy', 'Sermil', 'Adrian', 'Red'
];

if (isset($_POST['suggestion'])) {
	$nameInput = $_POST['suggestion'];

	if (!empty($nameInput)) {
		foreach ($names as $name) {
			if (stripos($name, $nameInput) === 0) {
				echo $name.'<br>';
			}
		}
	}
}


?>