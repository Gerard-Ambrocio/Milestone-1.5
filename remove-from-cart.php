<?php 

session_start();
if(isset($_GET['minus'])){
	$_SESSION['cart_items'][$_GET['minus']]--;
	if($_SESSION['cart_items'][$_GET['minus']]==0)
		unset($_SESSION['cart_items'][$_GET['minus']]);
}

if(isset($_GET['plus'])){
	$_SESSION['cart_items'][$_GET['plus']]++;
}

header('location:cart.php');





 ?>