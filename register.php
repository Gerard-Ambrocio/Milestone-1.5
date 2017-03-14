<?php

function display_content(){
	
	echo "
	<div class='register-box'>
	<h1 class='register-head text-center'>NEW ACCOUNT </h1>
		<form class='form-horizontal' method='POST' action='register.php' id='register-form'>
    <div class='form-group'>
      <label class='control-label' for='username'> Username:</label>
      <div class=''>
        <input type='text' class='form-control' id='username' name='username'>
      </div>
    </div>
    <div class='form-group'>
      <label class='control-label' for='password'>Password:</label>
      <div class=''>          
        <input type='password' class='form-control' id='password' name='password'>
      </div>
    </div>
      <div class='form-group'>
      <label class='control-label' for='confirmpw'> Confirm Password:</label>
      <div class=''>          
        <input type='password' class='form-control' id='confirmpw' name='confirmpw'>
      </div>
    </div>    


    <div class='form-group'>        
      <div class='col-sm-offset-2 col-sm-10'>
        <button type='submit' name='register' value='register' class='btn btn-md btn-danger'>CREATE ACCOUNT</button>
      <div>
    </div>
  </form>
  </div>
  </div>
	";
	register();
}





function register(){

	if (isset($_POST['register'])) {
		$new_user = ['username' => $_POST['username'],
					 'password' => $_POST['password']];
		


	if ($_POST['password'] == $_POST['confirmpw']){
			$new_user['role'] = 'regular';
		}//password confirm
		if ($_POST['username'] == "" || $_POST['password'] == "") {
			
		}//ifblack
		
		else{
		$string = file_get_contents("users.json");
		$users = json_decode($string, true);

		$users[] = $new_user;
		//array_push($users, $new_user);


		$fp = fopen('users.json', 'w');
		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		fclose($fp);	

		echo "<script>window.location.href='login.php'</script>";





			}//else
	
		}


		}//POST register
		if (isset($_POST['back'])){
		echo "<script>window.location.href='login.php'</script>";

	}//function register


require_once('template.php');

?>