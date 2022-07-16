<?php 
require ('../controllers/product_controller.php');
require("../functions/file_upload.php");




$bname = $_POST['cat_name'];
// echo"$bname";


$bname3 = $_POST['product_title'];
// echo"$bname3";

$bname4 = $_POST['product_price'];
// echo"$bname4";

$bname5 = $_POST['product_desc'];
// echo"$bname5";

$bname6 = $_POST['image'];

$bname7 = $_POST['keywords'];
// echo"$bname7";

$bname8 = $_POST['room_status'];
// echo"$bname8";



  //echo "</pre>";

  $img_name = $_FILES['image']["name"];
  $img_size = $_FILES['image']['size'];
  $tmp_name = $_FILES['image']['tmp_name'];

  //echo "$tmp_name";
  

 

 $folder=upload("images","products",$tmp_name,$img_name);


//$a,$b,$c,$d,$e,$f,$g
$insert_p=insert_product_ctrl($bname,$bname3,$bname4,$bname5,$folder,$bname7,$bname8);
if ($insert_p) {

		echo "Insertion Sucessful";
		header("location:../admin/product.php");
	}
	else{
		echo "Insertion failed";
	}
?>

