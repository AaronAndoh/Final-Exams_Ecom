<?php
require("../controllers/product_controller.php");
   $info = $_POST['product_title'];
     $name = $_POST['cat_name'];
     $price=$_POST['product_price'];
     $desc=$_POST['product_desc'];
     $file=$_POST['image'];
     $key=$_POST['keywords'];
     $status=$_POST['room_status'];

     $img_name = $_FILES['image']["name"];
     $img_size = $_FILES['image']['size'];
     $tmp_name = $_FILES['image']['tmp_name'];

     $folder=upload("images","products",$tmp_name,$img_name);


           $update =update_product_ctr($name,$info,$price,$desc,$folder,$key,$info);
                    if ($update) {
                      header("location:../admin/product.php");
                    }
                else{
                    echo"not working";
                }

?>
