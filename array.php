<?php

// $Cooking = [
// 			['name'=>'Whole jan',
// 			'category'=>'jan',
// 			'image'=>'img/compass.jpg',
// 			'desc'=>'lorem ipsum dolor amet idipscum'],
// 			['name'=>'Ground jan',
// 			'category'=>'jan',
// 			'image'=>'img/compass.jpg',
// 			'desc'=>'lorem ipsum dolor amet idipscum'],
// 			['name'=>'Baking jan',
// 			'category'=>'jan',
// 			'image'=>'img/compass.jpg',
// 			'desc'=>'lorem ipsum dolor amet idipscum'],
// 			['name'=>'Curry jan',
// 			'category'=>'feb',
// 			'image'=>'img/compass.jpg',
// 			'desc'=>'lorem ipsum dolor amet idipscum'],
// 			// ['name'=>'Seeds and Berry',
// 			// 'category'=>'jan',
// 			// 'image'=>'img/compass.jpg'],
// 			// ['name'=>'Dried Herbs',
// 			// 'category'=>'Herbs'],
// 			// ['name'=>'Ground Herbs',
// 			// 'category'=>'Herbs'],
// 			// ['name'=>'Spice & Grilling Rubs',
// 			// 'category'=>'Seasoning'],
// 			// ['name'=>'Vinegar Powder',
// 			// 'category'=>'Seasoning'],
// 			// ['name'=>'Smoke Flavor & Sauce Powders',
// 			// 'category'=>'Seasoning'],
// 			// ['name'=>'Chili Peppers',
// 			// 'category'=>'Dried Chilies'],
// 			// ['name'=>'Chili Powder',
// 			// 'category'=>'Dried Chilies'],
// 			// ['name'=>'Paprika',
// 			// 'category'=>'Dried Chilies'],
// 			// ['name'=>'Dried Mushrooms',
// 			// 'category'=>'Mushroom'],
// 			// ['name'=>'Mushroom Powder',
// 			// 'category'=>'Mushroom'],
// 			// ['name'=>'Mushroom Blends',
// 			// 'category'=>'Mushroom']
// 		];
		
// $fp = fopen('items.json', 'w');
// fwrite($fp, json_encode($Cooking, JSON_PRETTY_PRINT));
// fclose($fp);
	

	$Cooking = file_get_contents('items.json');
	$Cooking = json_decode($Cooking,true);

	function display_jan($Cooking){
		
		if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='additem.php?category=jan'><input type='submit' name='add-item' value='ADD ITEM' class='add-item' class='add-item'></input></a>";
			
					}
		foreach ($Cooking as $key => $row) {
			$name = $row['name'];
			$category = $row['category'];
			$img = $row['image'];
			$desc = $row['desc'];
			$price = $row['price'];

			if($category=='jan'){

				echo "<div class='phparray col-md-4';>
					<img src='$img' '>
					<div><h4><strong>$name</strong></h4></div> 
					<div>$desc</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					
					

	 				<form method='post' action='addtocart.php?key=$key'>
  					<label for='spinner'></label>
 					<input class='spinner' name='spinner' value='1'>
	 				<button type='submit' class='btn btn-primary cartbutton'>Add to cart</button>
					</form>

					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";

					}
				echo "</div>";
			}
		}
	}

		// 

		function display_feb($Cooking){
				
		if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='additem.php?category=feb'><input type='submit' name='add-item' value='ADD ITEM' class='add-item'></input></a>";
		
					}
		foreach ($Cooking as $key => $row) {
			$name = $row['name'];
			$category = $row['category'];
			$img = $row['image'];
			$desc = $row['desc'];
			$price = $row['price'];

			if($category=='feb'){

				echo "<div class='phparray col-md-4';>
					<img src='$img' '>
					<div><h4><strong>$name</strong></h4></div> 
					<div>$desc</div><hr>
					<div><h5>₱<strong>$price</strong></h5></div>
					
					
					<form method='post' action='addtocart.php?key=$key'>
  					<label for='spinner'></label>
 					<input class='spinner' name='spinner' value='1'>
	 				<button type='submit' class='btn btn-primary cartbutton'>Add to cart</button>
					</form>

					";

					if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
						echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
						echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";
					}
				echo "</div>";
			}
		}
	}
		function display_mar($Cooking){
						
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
								echo "<a href='additem.php?category=mar'><input type='submit' name='add-item' value='ADD ITEM' class='add-item'></input></a>";
				
							}
				foreach ($Cooking as $key => $row) {
					$name = $row['name'];
					$category = $row['category'];
					$img = $row['image'];
					$desc = $row['desc'];
					$price = $row['price'];

					if($category=='mar'){

						echo "<div class='phparray col-md-4';>
							<img src='$img' '>
							<div><h4><strong>$name</strong></h4></div> 
							<div>$desc</div><hr>
							<div><h5>₱<strong>$price</strong></h5></div>
							
							

					 		<form method='post' action='addtocart.php?key=$key'>
		  					<label for='spinner'></label>
		 					<input class='spinner' name='spinner' value='1'>
			 				<button type='submit' class='btn btn-primary cartbutton'>Add to cart</button>
							</form>


							";

							if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
								echo "<a href='edit.php?key=$key'><input type='button' name='edit' value='Edit'></input></a>";
								echo "<a href='delete.php?key=$key'><input type='button' name='delete' value='Delete'></input></a>";
							}
						echo "</div>";
					}
				}
			}

?>
<!-- <form method='get'>
  					<label for='spinner'></label>
 					<input class='spinner' name='spin-value' value='-'>
 					
	 				<input type='submit' class='btn btn-primary cartbutton' value='Add to cart'></input>
					
					</form> -->