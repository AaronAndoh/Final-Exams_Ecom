<?php 
//connnect to controller
require("../controllers/customer_controller.php");
//require("../settings/core.php");


//storing inputs into variables
$login_email=$_POST['Email'];
$login_password=$_POST['Password'];



//variable for the login control
$check_login = login_ctr($login_email,$login_password);
$data = $check_login['customer_pass'];
$password_check = password_verify($login_password,$data);

//check if the control function works
if ($check_login){


	if($password_check)
	{

	session_start();
		
	$_SESSION['user_role'] = $check_login['user_role'];
    $_SESSION['customer_id'] = $check_login['customer_id'];

    if($_SESSION['user_role'] == 1)
        {
            header("location:../admin/dashboard.php");

        }
        elseif ($_SESSION['user_role'] == 2) {
            // code...
          
            header("location:../view/welcome_page.php");
        }

		
	}else{
		
		header("location:../login/login.php");
	}
	
}
else{
	echo "failed";}


 ?>