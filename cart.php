<?php



function display_content(){


$string = file_get_contents("items.json");
$items = json_decode($string, true);



if(isset($_SESSION['cart_items'])){
	$total = 0;
	foreach ($_SESSION['cart_items'] as $index => $quantity) {
		$name = $items[$index]['name'];
		$desc = $items[$index]['desc'];
		$category = $items[$index]['category'];
		$image = $items[$index]['image'];
		$price = $items[$index]['price'];
		$subtotal = $price * $quantity;
		$total += $subtotal;

		
		
		echo "<div class='col-sm-2 mycart'>";
		echo "<div class='item_image'><img src='$image' id='imgcart'></div>";
		echo "<h3>$name ($quantity)</h3>₱ $price x $quantity = ₱ $subtotal <br> ";
		echo "<a href='remove-from-cart.php?minus=$index'><button>-</button></a>";
		echo "<a href='remove-from-cart.php?plus=$index'><button>+</button></a>";
		echo "<div style='clear:both'></div></div>";

	}
	echo "<h1 id='total'> TOTAL: ₱ $total</h1>";

	if(isset($_POST['window'])){
		echo"<script>window.location='checkout.php'</script>";
	}
}#
	echo "<form method='post' >
	
	<input type='submit' name='window' value='CHECKOUT' class='btn btn-danger' id='checkout'></input>
	
	</form>"

;

}
require_once('template.php');
?>



