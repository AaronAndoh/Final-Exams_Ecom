<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//function that class customer insertion function
function insert_cat_ctr($type){

  //setting instance of the class customer
    $insert_cat = new product_class();
  
    return $insert_cat->insert_cat_cls($type);
  }


  function show_cat_ctr(){

    $show= new product_class();

    return $show->show_cat_cls();
  }
  
  function delete_cat_ctr($cid)
  {
    // create an instance of the class
    // product class from the php file 
    $dels = new product_class();
  
    // return the method in the product_class 
    //(-> means this) : no space btn this and next word
    return $dels->delete_cat_cls($cid);
  }
  
  function select_one_cat_ctr($cid)
  {
    // create an instance of the class
    // product class from the php file 
    $sec = new product_class();
  
    // return the method in the product_class 
    //(-> means this) : no space btn this and next word
    return $sec->select_one_cat_cls($cid);
  }
  
  function update_category_ctr($cat_id, $cname)
  {
    // create an instance of the class
    // product class from the php file 
    $updel = new product_class();
  
    // return the method in the product_class 
    //(-> means this) : no space btn this and next word
    return $updel->update_cat_cls($cat_id, $cname);
  }
  
  function select_all_category_ctr()
  {
    // create an instance of the class
    // product class from the php file 
    $sel_cat= new product_class();
  
    // return the method in the product_class 
    //(-> means this) : no space btn this and next word
    return $sel_cat->select_all_category_cls();
  }

  function insert_product_ctrl($a,$b,$c,$d,$e,$f,$g) {
    //Newly created variable
    $product_details = new product_class();
   
    return $product_details->insert_product_cls($a,$b,$c,$d,$e,$f,$g);
  }

function select_product_ctr(){
    $product = new product_class();
  
    return $product -> select_product_cls();
  }


  function select_id_product_ctr($a){
    $productid = new product_class();
  
    return $productid -> id_product_cls($a);
  }



  


  function select_product_ava_ctr(){

    $products = new product_class();
  
    return $products -> select_product_ava_cls();
  }


  
  function delete_product_ctr($a){
  
    $delete = new product_class();
  
    return $delete->delete_product_cls($a);
  }

  function select_three_rooms_ctr(){

    $three = new product_class();

    return $three->select_three_rooms();
  }


  function select_res_ctr($a){

    $ress= new product_class();

    return $ress->select_res_cls($a);
  }


  function total_cart_price_ctr($a){

    $get_total = new product_class();
  
    return $get_total->total_cart_price_cls($a);
  
  }
  
  function update_product_ctr($a,$b,$c,$d,$e,$f,$g,$h){
    $product_update = new product_class();
    
    return $product_update->update_product_cls($a,$b,$c,$d,$e,$f,$g,$h);
  }

  
  
//--INSERT--//

//--SELECT--//

//--UPDATE--/

//--DELETE--//

?>