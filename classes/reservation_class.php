<?php 

 
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author Aaron Kwame Andoh
 *
 */

class reservation_class extends db_connection
{
	//--INSERT--//

function reservation_cls($p_id,$ip_add,$c_id,$resd,$depd,$adults,$kids){
    $sql="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `Res_Date`,`leave_date`,`adults`,`Kids`) VALUES ('$p_id','$ip_add','$c_id','$resd','$depd','$adults','$kids')";

    return $this->db_query($sql);

}


function select_ava_cls($a){
    $sql = "SELECT categories.cat_name,products.product_id, products.product_title,products.product_price,products.product_desc, products.product_image,products.product_keywords,products.status 
    FROM (products INNER JOIN categories ON categories.cat_id = products.product_cat) WHERE products.product_id='$a' AND `status`='avaliable'";
    return $this->db_fetch_all($sql);
}	

 
function delete_cart_cls($a,$b){
    //Sql query to delete brand
    $sql= "DELETE FROM `cart` WHERE `p_id` = '$a' AND `c_id` ='$b'";

    return $this->db_query($sql);

}

function insert_orders_cls($a,$b,$c){


    $sql="INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$a','$b','$c','success')";

    return $this->db_query($sql);
}

function insert_payments_cls($a,$b,$c,$d){


    $sql="INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) 
    VALUES ('$a','$b','$c','GHS','$d')";

    return $this->db_query($sql);
}

function get_order_id(){
$sql="SELECT order_id from orders ORDER BY order_id DESC LIMIT 1";
return $this->db_fetch_one($sql);

}

function get_order_date(){
$sql="SELECT order_date from orders ORDER BY order_id DESC LIMIT 1";
return $this->db_fetch_one($sql);
}

function get_cart_details($a){


$sql="SELECT `p_id`, `qty` FROM `cart` WHERE c_id='$a'";

return $this->db_fetch_one($sql);
}

function insert_orderdetails($a,$b,$c){


$sql="INSERT INTO `orderdetails`(`order_id`,`product_id`, `qty`) 
VALUES ('$a','$b','$c')";

return $this->db_query($sql);
}

function delete_after_pay_cart_cls($cid){
$sql = "DELETE FROM `cart` WHERE `c_id`='$cid'";

return $this->db_query($sql);
}



 

}

?>


