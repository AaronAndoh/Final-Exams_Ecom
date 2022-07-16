<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//function that class customer insertion function
function customer_reg_cls($a, $b, $c, $d, $e, $f, $g){

  //setting instance of the class customer
    $Customer_registration = new customer_class();
  
    return $Customer_registration->customer_reg_cls($a, $b, $c, $d, $e, $f, $g);
  }
  
  
  
  function login_ctr($email,$password){
  
    $Customer_login = new customer_class();
  
    return $Customer_login->login_cls($email,$password);
  }

  function number_of_users_ctr(){
  
    $number = new customer_class();
  
    return $number->number_of_user_cls();
  }

  function select_avaliable_ctr(){
    $ava = new customer_class();
  
    return $ava -> select_avaliable_cls();
  }

  function select_unavaliable_ctr(){
    $ava = new customer_class();
  
    return $ava -> select_unavaliable_cls();
  }

  function total_cart_price_ctr($a){

    $get_total = new cart_class();
  
    return $get_total->total_cart_price_cls($a);
  
  }
//--INSERT--//

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>