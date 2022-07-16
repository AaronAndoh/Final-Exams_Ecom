<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function is_user_logged_in(){
	if ($_SESSION["customer_id"]){
		return true;
	} 
    else {
		return false;
	}
}

//function to get user ID
//function to check for role (admin, customer, etc)


function is_user_logged_in_admin(){
	if($_SESSION['user_role'] == 1){
		return true;
	} 
    else {
		return false;
	}
}




//function to check for role (admin, customer, etc)



?>