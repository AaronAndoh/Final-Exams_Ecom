<?php
require("../controllers/product_controller.php");

$id = $_POST['info'];




$delete = delete_cat_ctr($id);

if ($delete) {
    echo "Category Deleted";

}
else{
    echo "Something went wrong";
}




?>