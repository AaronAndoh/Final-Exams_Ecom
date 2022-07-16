<?php
require("../controllers/product_controller.php");

$id = $_POST['info'];

echo "$id";




$delete = delete_cat_ctr($id);

if ($delete) {
    echo "Product Deleted";

}
else{
    echo "Something went wrong";
}




?>