<?php session_start(); 

if(!isset($_SESSION['username'])){
	$_SESSION['username']="";
	$_SESSION['role']="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/media.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
	<script>
	  $( function() {
	    var spinner = $( ".spinner" ).spinner();
	 
	    $( "#disable" ).on( "click", function() {
	      if ( spinner.spinner( "option", "disabled" ) ) {
	        spinner.spinner( "enable" );
	      } else {
	        spinner.spinner( "disable" );
	      }
	    });

	    $(".spinner").spinner({min: 0});
	   
	 
	    $( "button" ).button();
	  } );


		// Javascript to enable link to tab
		var hash = document.location.hash;
		var prefix = "tab_";
		if (hash) {
		    $('.nav-tabs a[href="'+hash.replace(prefix,"")+'"]').tab('show');
		} 

		// Change hash for page-reload
		$('.nav-tabs a').on('shown', function (e) {
		    window.location.hash = e.target.hash.replace("#", "#" + prefix);
		});


		
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });
})


	</script>
</head>
<body>

	<nav class="navbar navbar-fixed-top ">
	  

	  <div class="container-fluid">

	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php"> <img src="img/anghang.jpg" id="logo";></a>
	    </div>

	    <ul class="nav navbar-nav navbar-left">
	      <li class="nav-item active"><a class"navlink" href="shop.php"id="nav-shop";>SHOP</a></li>
	      <li><a href="#">TALK+HANG</a></li>
	    </ul>

	    <ul class="nav navbar-nav navbar-right">

          <li>
	    	  <!--  	  <input class="form-control" type="text" placeholder="Search"> -->
			<a href="#"><span class="glyphicon glyphicon-search"></span></a>
 	  	  </li>	

 	  	  <?php
	          if ($_SESSION['username'] == "") {
	          	if ($_SERVER['PHP_SELF']=='/MILESTONE 1.75/login.php') {
	          		echo "<li class='nav-item dropdown'>
				   		<a class='nav-link dropdown-toggle' data-toggle='dropdown'
				       	href='#' role='button' aria-haspopup='true' aria-expanded='false'>
				      	<span class='glyphicon glyphicon-user'></span> ACCOUNT </a>
					    <ul class='dropdown-menu'>				            
				            <li><a href='register.php'>REGISTER</a></li>

		        		</ul>
	       			</li>";  
	          	}else {
	          		echo "<li class='nav-item dropdown'>
				   		<a class='nav-link dropdown-toggle' data-toggle='dropdown'
				       	href='#' role='button' aria-haspopup='true' aria-expanded='false'>
				      	<span class='glyphicon glyphicon-user'></span> ACCOUNT </a>
					    <ul class='dropdown-menu'>
				            <li><a href='login.php'>LOGIN </a></li>				           
		        		</ul>
	       			</li>";  
	          	}
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

	<section class="container">
		<div id="display-content">
			<?php display_content();?>
		</div>		
	</section>

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
					<ul>
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