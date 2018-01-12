<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name='viewport' content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>AJAX and JSON Example</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body>
	<main id="mainBG">
		<div class="container">
			<div class="row"><h2>Type Pikachu, Charmander, or Squirtle</h2></div>
			<div class="row">
				<div class="col l4 offset-l4 input-field s12">
					<label>Input:</label><input type="text" id="myinput" autofocus>
				</div>
			</div>
			<br>
			<div class='row'>
				<div class="col l4 offset-l4 s12"><img id="pokeIMG" src=""><div id="jsonsection"></div></div>
			</div>
			<div id="outputsection"></div><br><hr><br>
			<div class='center-align'><button id="viewUsers" class="waves-effect waves-light btn">View Users</button></div>
			<ul id="userList" class='center-align'></ul>
			<br><hr>
			<div class='row'>
				<div class="col l4 offset-l4 s12 input-field">
					<input type="text" id="userName" placeholder="Enter Username">
					<input type="text" id="passWord" placeholder="Enter Password">
					<div class='center-align'><button id="validateUser" class="waves-effect waves-light btn">Validate User</button></div>					
				</div>
			</div><hr>
			<div class='row'>
				<div class="col l4 offset-l4 s12 input-field">
					<input type="text" id="nameInput" name='nameInput' placeholder="Enter Username">
					<p id="namesSuggested"></p>
				</div>
			</div>
		</div>
	</main>


	<script src='assets/js/script.js'></script>
          
</body>
</html>