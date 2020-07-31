<?php 
session_start();
// Variable Declare
$admincode = "";
$errors   = array();
// When Submit Button Click
if (isset($_POST['register_btn'])) {
	checkadmincode();
}
function checkadmincode(){
	global $errors, $admincode;
  $admincode    =  $_POST['admincode'];
  $defaultAdminCode = 'Rahul@123';
	// form validation: ensure that the form is correctly filled
	if (empty($admincode)) { 
		array_push($errors, "Admin code is required"); 
	}
	if ($admincode != $defaultAdminCode) {
		array_push($errors, "This is not correct admin code");
	}
	if (count($errors) == 0) {
		$_SESSION['user_type'] = 'admin';
		$_SESSION['success']  = "Your welcome in admin dashboard section";
		header('location: dashboard.php');					
	}
}
// Error Function
function display_error() {
	global $errors;
	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

// Logout User
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user_type']);
	unset($_SESSION['success']);	
	header("location: index.php");
}

?>