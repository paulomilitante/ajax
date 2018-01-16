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
	foreach ($items as $index => $item) {
		if ($item['category'] == $filter || $filter == 'All'){
		echo "<div class='col l4 s12 contentBox'><img class='imgMenu' src='".$item['img']."'>";
		echo "<h5>".$item['name']."</h5>";
		echo "<h6><i>".$item['description']."</i></h6>";
		echo "<p>Php ".$item['price']."</p></br>";
		if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){
			echo "<button class='waves-effect waves-light purple lighten-3 btn modal-trigger render_modal_body' data-target='modal1' data-index='$index'>EDIT</button>";
			echo "<button class='waves-effect waves-light deep-orange lighten-2 btn modal-trigger render_modal_delete' data-target='modal2' data-index='$index'>DELETE</button>";
		}
		else if (isset($_SESSION['username']))
			echo "<button class='waves-effect waves-light btn purple darken-3'>Add to Cart</button>";
		echo "</div>";
		}
		
	};
	echo "</div>";
	echo "</div>";

	echo "<div id='modal1' class='modal'>
			<div class='modal-content' id='modal-content'></div>
		</div>";

	echo "<div id='modal2' class='modal'>
			<div class='modal-content' id='modal-content2'></div>
		</div>";


}

require 'template.php';




 ?>
 
<script>document.getElementById('catOption').onchange = function() {document.getElementById('category').submit()};</script>