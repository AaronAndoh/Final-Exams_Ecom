<?php

require("../controllers/customer_controller.php");
require("../functions/file_upload.php");


//Getting values from the register page using Post and storing in a variable
$name = $_POST['name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$country = $_POST['country'];
$city = $_POST['city'];
$contact = $_POST['contact'];
$image = $_POST['image'];

//getting info about the file uploaded
$img_name = $_FILES['image']["name"];
 $img_size = $_FILES['image']['size'];
 $tmp_name = $_FILES['image']['tmp_name'];


//using the function to create a file directory for the image 
$folder=upload("images","customer",$tmp_name,$img_name);
              

//check whether function works
$check=customer_reg_cls($name,$email,$password,$country,$city,$contact,$folder);
if ($check) {
	//redirect to the login page
	header("Location:../login/login.php");
	exit();

}else{
	echo "not working";
}


?>