<?php 
// $string = file_get_contents('assets/items.json');
// $items = json_decode($string, true);

function display_title() {
	echo 'Menu';
}

function display_content() {
	require 'connection.php';

	$filter = isset($_GET['category']) ? $_GET['category'] : 'All';


	echo "<div class='container'>";
	echo "<div class='row valign-wrapper'>";
	echo "<div class='col l1'>";
	if (isset($_SESSION['username']) && $_SESSION['role'] !== 'admin') {
	echo "<a href='#' data-activates='slide-out' class='button-collapse'><i class='purple-text text-lighten-2 small material-icons'>shopping_cart</i>";
  	if (isset($_SESSION['cart'])) {
              echo "<span class='new badge purple lighten-2' data-badge-caption=''>".array_sum($_SESSION['cart'])."</span>";
            };
	echo "</a>";
	}
	echo "</div>";

	
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);
	echo "<form id='category' class='col l2 offset-l9 input-field'><select id='catOption' name='category'><option>All</option>";
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$category = $row['name'];
		echo ($filter == $id) ? "<option value='$id' selected>$category</option>" : "<option value='$id'>$category</option>" ;
	}
	echo "</select>";
	echo "</form>";
	echo "</div>";


	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn,$sql);
	echo "<div class='row'>";
	while($item = mysqli_fetch_assoc($result)) {
		$index = $item['id'];

		if ($item['category_id'] == $filter || $filter == 'All'){
		echo "<div class='col l4 s12 contentBox'><img class='imgMenu' src='".$item['image']."'>";
		echo "<h5>".$item['name']."</h5>";
		echo "<h6><i>".$item['description']."</i></h6>";
		echo "<p>Php ".$item['price']."</p></br>";
		if (isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
			echo "<button class='waves-effect waves-light purple lighten-2 btn modal-trigger render_modal_body' data-target='modal1' data-index='$index'>EDIT</button>";
			echo "<button class='waves-effect waves-light red lighten-2 btn modal-trigger render_modal_delete' data-target='modal2' data-index='$index'>DELETE</button>";
		}
		else if (isset($_SESSION['username']))
			echo "<button class='waves-effect waves-light purple lighten-2 btn modal-trigger render_modal_addcart' data-target='modal3' data-index='$index'>Add to Cart</button>";
		echo "</div>";
		}
	}
	echo "</div>";
	echo "</div>";




	echo "<div id='modal1' class='modal'>
			<div class='modal-content' id='modal-content'></div>
		</div>";

	echo "<div id='modal2' class='modal'>
			<div class='modal-content' id='modal-content2'></div>
		</div>";

	echo "<div id='modal3' class='modal'>
			<div class='modal-content' id='modal-content3'></div>
		</div>";

	echo "<ul id='slide-out' class='side-nav'>";
		$total = 0;
		if (isset($_SESSION['cart'])){
				foreach ($_SESSION['cart'] as $index => $quantity) {
					$sql = "SELECT * FROM items WHERE id='$index'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
						echo "<form class='container' method='POST' action='changequantity.php?index=$index'>";
						echo "<li><a href='#!user' class='center-align'><img class='circle imgMenu2' src='".$row['image']."'></a></li>";
						echo "<h6>".$row['name']."</h6>";
						echo "<h6>Price: Php ".$row['price']."</h6>";
						echo "<h6>Quantity: <input type='number' name='quantity' min=1 value='".$quantity."'></h6>";
						echo "<h6>Total Price: Php ".($row['price']*$quantity)."</h6>";
						echo "<a href='removecart.php?index=$index'><button type='button' class='waves-effect waves-light red lighten-2 btn'>x</button></a>";
						echo "</form>";
						echo "<li><div class='divider'></div></li>";
						$total += ($row['price']*$quantity);
				}
		} 
	echo "<li><h5>Total: Php $total</h5></li>";
	echo "<a href='clearcart.php'><button class='waves-effect waves-light red lighten-2 btn-large'>Clear Cart</button></a>";
	echo "<button class='waves-effect waves-light purple lighten-2 btn-large'>Checkout</button>";
  	echo "</ul>";





}

require 'template.php';




 ?>
 
<script>document.getElementById('catOption').onchange = function() {document.getElementById('category').submit()};</script>