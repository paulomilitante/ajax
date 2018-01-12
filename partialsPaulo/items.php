<?php 
$string = file_get_contents('assets/items.json');
$items = json_decode($string, true);

function display_title() {
	echo 'Menu';
}

function display_content() {
	global $items;

	$categories = array_unique(array_column($items, 'category'));
	$filter = isset($_GET['category']) ? $_GET['category'] : 'All';


	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<form id='category' class='col l2 input-field'><select id='catOption' name='category'><option>All</option>";
	foreach ($categories as $category){
		echo ($filter == $category) ? "<option selected>$category</option>" : "<option>$category</option>" ;
	}
	echo "</select>";
	echo "</form>";
	echo "</div>";

	echo "<div class='row'>";
	foreach ($items as $item) {
		if ($item['category'] == $filter || $filter == 'All'){
		echo "<div class='col l4 s12 contentBox'><img class='imgMenu' src='".$item['img']."'>";
		echo "<h5>".$item['name']."</h5>";
		echo "<p>Price: ".$item['price']."</p></br>";
		if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin')
			echo "<button class='waves-effect waves-light red lighten-2 btn'>EDIT/DELETE</button>";
		else if (isset($_SESSION['username']))
			echo "<button class='waves-effect waves-light btn amber lighten-2'>Add to Cart</button>";
		echo "</div>";
	}};
	echo "</div>";
	echo "</div>";
}

require 'template.php';




 ?>
 
<script>document.getElementById('catOption').onchange = function() {document.getElementById('category').submit()};</script>