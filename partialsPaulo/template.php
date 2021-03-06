<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php display_title();?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="assets/styleCSS.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <?php require "partials/nav.php" ?>
	<main class='contentAll'>
	<?php display_content(); ?>
	</main>
	<?php require "partials/footer.php" ?>

  <script src="assets/scriptJS.js"></script>
</body>
</html>
