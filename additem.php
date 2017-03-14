<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<body>

<form method='post'>
	name: <input type='text' name='name'></input><br>
	category: <input readonly type='text' name='category' value='<?php echo $_GET['category']; ?>'></input><br>
	image: <input type='text' name='image'></input><br>
	description: <input type='text' name='description'></input><br>
	price: <input type='text' name='price'></input><br>
	<input type='submit' name='submit'></input>
	<input type='submit' name='return' value="Return"></input>
</form>

<?php
if(isset($_POST['submit'])){
	$item = [
	"name" => $_POST['name'],
	"category" => $_POST['category'],
	"image" => $_POST['image'],
	"desc" => $_POST['description'],
	"price"=> $_POST['price'],
	];

	$items =  file_get_contents('items.json');
	$items = json_decode($items, TRUE);
	$items[] = $item;


	$fp = fopen('items.json', 'w');
	fwrite($fp, json_encode($items, JSON_PRETTY_PRINT));
	fclose($fp);
}	
 
if(isset($_POST['return'])){
		header('location:shop.php#blank');	
	}
	




?>

</body>
</html>