<?php
require('../controllers/product_controller.php');

   $room=$_POST['room_type'];
   echo "$room";

   $type=insert_cat_ctr($room); 
   if ($type) {
      header("location:../admin/room_cat.php");
   }
   else {
      echo"something went wrong";
   }
   

?>