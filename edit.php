<?php

$key = $_GET['key'];

$Cooking = file_get_contents('items.json');
$Cooking = json_decode($Cooking,true);


if(isset($_POST['submit'])){
	$item = [
	"name" => $_POST['name'],
	"category" => $_POST['category'],
	"image" => $_POST['image'],
	"desc" => $_POST['description'],
	"price" => $_POST['price'],
	];

	$Cooking[$key] = $item;
	// unset($Cooking[$key]);
	// $Cooking[] = $item;

	$fp = fopen('items.json', 'w');
	fwrite($fp, json_encode($Cooking, JSON_PRETTY_PRINT));
	fclose($fp);

	header('location:shop.php#blank');
}	

	if(isset($_POST['return'])){
		header('location:shop.php#blank');	
	}
	

?>



<form method='post'>
	name: <input type='text' name='name' value='<?php echo $Cooking[$key]['name']; ?>'></input><br>
	category: <input type='text' name='category' value='<?php echo $Cooking[$key]['category']; ?>'></input><br>
	image: <input type='text' name='image' value='<?php echo $Cooking[$key]['image']; ?>'></input><br>
	description: <input type='text' name='description' value='<?php echo $Cooking[$key]['desc']; ?>'></input><br>
	price: <input type='text' name='price' value='<?php echo $Cooking[$key]['desc']; ?>'></input><br>
	<input type='submit' name='submit'></input>
	<input type='submit' name='return' value="Return"></input>
</form>