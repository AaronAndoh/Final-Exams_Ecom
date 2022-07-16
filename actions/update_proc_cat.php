<?php
require("../controllers/product_controller.php");
   $name = $_POST['room_up'];
     $id = $_POST['idd'];

echo"$name";
echo"$id";
           $update =update_category_ctr($id,$name);
                    if ($update) {
                      header("location:../admin/room_cat.php");
                    }
                else{
                    echo"not working";
                }
?>
