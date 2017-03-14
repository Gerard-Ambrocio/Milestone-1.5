






	<?php  
	function display_content(){
		require_once('array.php');
	echo "<section class='main container' id='main'>		
				<ul class='nav nav-tabs row'>
				  <li><a data-toggle='tab' href='#jan'>Jan 2017</a></li>
				  <li><a data-toggle='tab' href='#feb'>Feb 2017</a></li>
				  <li class='active'><a data-toggle='tab' href='#mar'>Mar 2017</a></li>
				</ul>

				<div class='tab-content '>
			
				  <div id='jan' class='tab-pane fade'>
				    <h3>January</h3>";
				   display_jan($Cooking); 
				 echo " </div>
				  <div id='feb' class='tab-pane fade'>
				    <h3>February</h3>";
				    display_feb($Cooking); 
				 echo "</div>
				  <div id='mar' class='tab-pane fade in active'>
				    <h3>March</h3>";
				    display_mar($Cooking); 
				  echo  "
				  </div>
				</div><!--  tab-content -->


				<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
				  <div class='modal-dialog' role='document'>
				    <div class='modal-content'>
				      <div class='modal-header'>
				        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				        <h4 class='modal-title' id='myModalLabel'>Info</h4>
				      </div>
				      <div class='modal-body'>
				        ...
				      </div>
				      <div class='modal-footer'>
				        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
				        <!-- <button type='button' class='btn btn-primary'>Save changes</button> -->
				      </div>
				    </div>
				  </div>
				</div>		
		</section>";

	}


		require_once('template.php');






		?>