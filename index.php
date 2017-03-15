
<?php session_start(); 

if(!isset($_SESSION['username'])){
	$_SESSION['username']="";
	$_SESSION['role']="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/media.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


	<nav class="navbar navbar-fixed-top ">
	  

	  <div class="container-fluid">

	    <div class="navbar-header">
	      <a class="navbar-brand" href="#"> <img src="img/anghang.jpg" id="logo";></a>
	    </div>

	    <ul class="nav navbar-nav">
	      <li class="nav-item active"><a class"navlink" href="shop.php" id="nav-shop">SHOP</a></li>
	      <li><a href="#">TALK+HANG</a></li>
	    </ul>

	    <ul class="nav navbar-nav navbar-right">

          <li>
	    	  <!--  	  <input class="form-control" type="text" placeholder="Search"> -->
			<a href="#"><span class="glyphicon glyphicon-search"></span></a>
 	  	  </li>	
     

	      <?php
	          if ($_SESSION['username'] == "") {
	        	echo "<li class='nav-item dropdown'>
				   		<a class='nav-link dropdown-toggle' data-toggle='dropdown'
				       	href='#' role='button' aria-haspopup='true' aria-expanded='false'>
				      	<span class='glyphicon glyphicon-user'></span> ACCOUNT </a>
					    <ul class='dropdown-menu'>
				            <li><a href='login.php'>LOGIN</a></li>
				            <li role='separator' class='divider'></li>
				            <li><a href='register.php'>REGISTER</a></li>
		        		</ul>
	       			</li>";  	
       	
	          }else{
	          	echo " <li class='dropdown active'>
	         			<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='display: block;'> ".$_SESSION['username']." <span class='caret'></span></a>
				        <ul class='dropdown-menu'>
				            <li><a href='#'>Account</a></li>
				            <li><a href='#'>Wishlist</a></li>
				            <li><a href='#'>Recipes</a></li>
				            <li role='separator' class='divider'></li>
				            <li><a href='logout.php'>Logout</a></li>
				        </ul>
				        </li>";
	          }
	       ?>
	       <li class="nav-item dropdown">
		   	<a class="nav-link dropdown-toggle" data-toggle="dropdown"
		       href='cart.php' role="button" aria-haspopup="true" aria-expanded="false">
		      <span class="glyphicon glyphicon-shopping-cart"></span> CART </a>
		    <ul class='dropdown-menu'>
	            <li><a href='cart.php'> VIEW CART</a></li>
	            <li role='separator' class='divider'></li>	            
	        </ul>
	       </li>

	    </ul> <!-- navbar-right -->

	  </div> <!-- container-fluid -->
	</nav>

	<div class="container-fluid" id="falsenav">
	  	
	</div>


	<section class="container-fluid" id="banner-text">
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		    <span>FREE SHIPPING WITHIN METRO MANILA</span>
		    </div>
		    <div class="item">
		      <span>ALL YOUR PHILIPPINE SPICES IN ONE PLACE</span>
		    </div>
		    <div class="item">
		      <span>WE ACCEPT ALL VISA AND MASTERCARD </span>
		    </div>
		     <div class="item">
		      <span> CALL US AT +63-(02)-281-8954  </span>
		    </div>
		  </div>
	</section>

	<section class="container-fluid" id="main-banner">
		<div class="jumbotron jumbotron-fluid">
 			 <div class="container" id="fire">
 			 	<div class="bannerbox row">
 			 		<div class="col-sm-4">
 			 			<img id="chili" class="" src="img/banner-background.jpeg">
 			 			<span class="fire" style="color:transparent; user-select:none;">.*.|.|.|..</span>
 			 		</div>
 			 		<div class="col-sm-8">
 			 			<h1 class="display-3"> Talk | Anghang  </h1>
						<p class="lead" id="banner-sub">Explore, Share & Shop...<br>Raid the Philippine Spice Rack... </p>
						<p id="banner-button">
	   						<a class="btn btn-danger btn-lg" href="shop.php" role="button" id="button-banner">SHOP NOW</a>
	 					</p> 
 			 		</div> 					
	 			</div>		          
  			 </div>
		</div>
	</section>

	<section class="about container">
			<img src="http://running.competitor.com/files/2014/10/chia-seeds-hands.jpg">
		<div class="row aboutdiv">
			
			<div class="col-sm-offset-1 "><h1>About Us</h1>
			<p> From our humble origins in spice sampling throughout the Philippines, <br> our mission  is to conintinually progress the ascension of the Philippine flavours.<br> Our company provides and promote Philippine spices from the a numerous <br> locations spanning from the top most part of the country in the Bataan group of <br> island, to the many islands of Visayas, the mountain regions of Cordillera as well as the <br> hidden subterannean areas of Mindanao. </p>
			<h2>Help us and win!</h2>
			<p>
			 We have featured a select few of them every month for you to send us a recipe. Loyal subscibers will <br> recieve the "Spice of the Month", and we will feauture your recipes for the world to know and winners will <br> be  announced and rewarded. Visit our blog: "TALK + HANG" for more details.</p></div>
			
		</div>

	</section>








	<section id="sell">

			<div class="container">    
			  <div class="row">

			    <div class="col-sm-4">
			      <div class="panel panel-primary">        
			        <div class="panel-body"><img src="https://www.organicfacts.net/wp-content/uploads/2013/05/Herbs2-700x525.jpg" class="img-responsive" style="width:100%; height:250px" alt="Image"></div>
			        <button type="button" class="btn btn-default btn-lg btn1">SHOP FOR HERBS</button>			        	
			      </div>

			        <div class="row">
				      <div class="col-sm-12">
						  <div class="panel panel-primary">        
					        <div class="panel-body"><img src="http://i.ndtvimg.com/i/2016-05/spices_650x400_51463018965.jpg" class="img-responsive" style="width:100%; height:250px" alt="Image"></div> 
					        <button type="button" class="btn btn-default btn-lg btn2 ">SHOP FOR SPICES</button>	
					      </div>
				      </div>				     
				    </div>
			    </div>

			    <div class="col-sm-4"> 
			      <div class="panel panel-primary">        
			        <div class="panel-body"><img src="https://static.pexels.com/photos/56019/mediterranean-food-tomatoes-red-56019.jpeg" style="width:100%; height:500px;" alt="Image"></div>
			        <button type="button" class="btn btn-default btn-lg btn3">SHOP FOR PREMIUM <br> INGREDIENTS</button>
			        				        
			      </div>
			    </div>

			    <div class="col-sm-4">
			      <div class="panel panel-primary">        
			        <div class="panel-body"><img src="http://www.preparedfoods.com/ext/resources/May-2013/pfx0513abs6_feat.jpg?1445021856" class="img-responsive" style="width:100%; height:250px" alt="Image"></div>
			        <button type="button" class="btn btn-default btn-lg btn btn4">SHOP FOR SALTS</button>		        	
			      </div>
			        <div class="row">
				      <div class="col-sm-12">

						  <div class="panel panel-primary">        
					        <div class="panel-body"><img src="http://perfectformuladiet.com/wp-content/uploads/2014/12/vanilla-flower-and-dried-pods-smaller.jpg"></div>
					        <button type="button" class="btn btn-default btn-lg btn5">SHOP FOR EXTRACTS</button>
					      </div>
				      </div>				     
				    </div>
			    </div>
			  </div>
			</div>
	</section>


	<!-- <footer class=" text-center">
		<div class="container">
			<div class="row" id="subscribe">	  
			  <form> 
			    <div class="form-group">    
			      <label class="col-sm-4" for="email">Email:</label>
			      <input class="col-sm-4" type="email" class="form-control" id="email" placeholder="Enter email">
			    </div> 
			    <button type="submit" class="btn btn-default col-sm-4">Submit</button>
			  </form>
			</div>
		</div>
	</footer> -->
	<footer class="footer container-fluid">
	<div class="container row">
		<div class="col-sm-5 footer-right">
			<form>				
			  <div class="form-inline sub">
			    <label for="email">SUBSCRIBE TO OUR NEWS LETTER</label>
			    <input type="email" class="form-control" id="email">
			  </div>

			  <button type="submit" class="btn btn-danger" id="emailbtn">SUBSCRIBE</button>
			</form>
			<p>Copyright © Talk | Anghang Inc. all rights reserved | Design by Gerard </p>
			
		</div>
			<div class='col-sm-5' id="center-footer">
				<h3> CUSTOMER SERVICE</h3>
				<ul>
				<li> 
					<a href="#">Shipping & Delivery</a>
				</li>
				<li>
					<a href="#">Returns & Replacements</a>
				</li>
				<li>
					<a href="#">Spicy Satisfaction Guarantee</a>
				</li>
				<li>
					<a href="#">Safe & Secure Shopping Guarantee</a>
				</li>
			</ul>
			</div>
			<div class="col-sm-2">
					<ul style="height: ">
				<li>
					<img src="http://image.flaticon.com/icons/svg/145/145802.svg">
				</li>
				<li>
					<img src="http://image.flaticon.com/icons/svg/145/145812.svg">
				</li>
				<li>
					<img src="http://image.flaticon.com/icons/svg/145/145804.svg ">
				</li>
				<li>
					<img src="http://image.flaticon.com/icons/svg/145/145808.svg">
				</li>
			</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
	</footer>


</body>
</html>