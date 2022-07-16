<?php
//connect to the user account class
include("../classes/reservation_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//function that class customer insertion function
function reservation_ctr($p_id,$ip_add,$c_id,$resd,$depd,$adults,$kids){

  //setting instance of the class customer
    $res = new reservation_class();
  
    return $res->reservation_cls($p_id,$ip_add,$c_id,$resd,$depd,$adults,$kids);
  }
  Function select_ava_ctr($a){

    $ava= new reservation_class();

    return $ava->select_ava_cls($a);
  }

function delete_cart_ctr($a,$b){
  
  $res_delete = new reservation_class();

  return $res_delete->delete_cart_cls($a,$b);
}
function total_cart_price_ctr($a){

  $get_total = new reservation_class();

  return $get_total->total_cart_price_cls($a);

}
function insert_orders_ctr($a,$b,$c){


$add = new reservation_class();

return $add->insert_orders_cls($a,$b,$c);
}


function insert_payments_ctr($a,$b,$c,$d)
{

// creating an instance
$pay = new reservation_class();

// return method
return $pay->insert_payments_cls($a,$b,$c,$d);
}

function get_order_id_ctr()
{

// creating an instance
$py = new reservation_class();

// return method
return $py->get_order_id();
}

function get_order_date_ctr()
{

// creating an instance
$piy = new reservation_class();

// return method
return $piy->get_order_date();
}

function get_cart_details_ctr($a)
{

// creating an instance
$piy = new reservation_class();

// return method
return $piy->get_cart_details($a);
}


function insert_orderdetails_ctr($a,$b,$c)
{

// creating an instance
$piy = new reservation_class();

// return method
return $piy->insert_orderdetails($a,$b,$c);
}



function delete_After_payment_ctr($cid){

$delall = new reservation_class();

return $delall-> delete_after_pay_cart_cls($cid);
}




function get_customers_ctr($a){
$slect_cus = new reservation_class();

return $slect_cus->get_customers_cls($a);

}



  