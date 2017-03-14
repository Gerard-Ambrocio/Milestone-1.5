<?php

session_start();
$key = $_GET['key'];

// if(isset($_SESSION['cart_items'][$key])){
// 	$_SESSION['cart_items'][$key]++;
// } else {
// 	$_SESSION['cart_items'][$key] = 1;
// }
// echo $_SESSION['cart_items'][$key];

if(isset($_SESSION['cart_items'][$key])){
	$_SESSION['cart_items'][$key] += $_POST['spinner'];
} else {
	$_SESSION['cart_items'][$key] = $_POST['spinner'];
}
	
// }

header('location:shop.php#blank');
	// echo "<script>window.location.href = 'shop.php' </script>";


?>