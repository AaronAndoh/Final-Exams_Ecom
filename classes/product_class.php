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

class product_class extends db_connection
{
	//--INSERT--//

	function insert_cat_cls($type){

		//select email and password for login.
		$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$type')";

		return $this->db_query($sql);
	}

	function show_cat_cls(){

		$sql="SELECT * FROM `categories`";

		return $this->db_fetch_all($sql);
	}


  
	function delete_cat_cls($cid){

		$sql = "DELETE FROM `categories` WHERE `cat_id`='$cid'";
	
		return $this->db_query($sql);
		
	}

	function select_one_cat_cls($cid){

		$sql="SELECT * FROM `categories` WHERE`cat_id`='$cid'";

		return $this->db_fetch_one($sql);

	}

	function update_cat_cls($cat_id, $cname){
        $sql = "UPDATE `categories` SET `cat_name`='$cname' WHERE `cat_id`= '$cat_id'";
		
			return $this->db_query($sql);

	} 
	//--SELECT ALL CATEGORIES--//
	public function select_all_category_cls(){
        $sql = "SELECT * FROM `categories`";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 
	 function insert_product_cls($a,$b,$c,$d,$e,$f,$g){

		$sql="INSERT INTO `products`( `product_cat`, 
		`product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`,`status`)
		 VALUES ('$a','$b','$c','$d','$e','$f','$g')";
		
		return $this->db_query($sql);
	}
	 function select_product_cls(){
		$sql = "SELECT categories.cat_name,products.product_id, products.product_title,
		 products.product_price,products.product_desc, products.product_image,products.product_keywords,
		 products.status FROM (products INNER JOIN categories ON categories.cat_id = products.product_cat)";
	
		return $this->db_fetch_all($sql);


	 }



		function id_product_cls($a){
			$sql = "SELECT categories.cat_name,products.product_id, products.product_title,
			 products.product_price,products.product_desc, products.product_image,products.product_keywords,
			 products.status FROM (products INNER JOIN categories ON categories.cat_id = products.product_cat) WHERE products.product_id='$a'";
		
			return $this->db_fetch_all($sql);


	
	}	

	function select_product_ava_cls(){

		$sql = "SELECT categories.cat_name,products.product_id, products.product_title,products.product_price,products.product_desc, products.product_image,products.product_keywords,products.status 
		FROM (products INNER JOIN categories ON categories.cat_id = products.product_cat) WHERE `status`='avaliable'";

		return $this->db_fetch_all($sql);
	}	

	function delete_product_cls($a){
		//Sql query to delete brand
		$sql= "DELETE FROM `products` WHERE `product_id` = '$a'";
	
		return $this->db_query($sql);
	}
	function select_three_rooms(){
		$sql = "SELECT * FROM `products` limit 1";

		return $this->db_fetch_all($sql);
	}

	function select_res_cls($a){
		$sql="SELECT DATEDIFF(leave_date,Res_date) AS date_difference,products.product_id,products.product_price,products.product_image,cart.Res_Date,cart.leave_date,
		cart.adults,cart.Kids, products.product_title,DATEDIFF(leave_date,Res_date)*products.product_price
		 FROM products INNER JOIN cart ON products.product_id = cart.p_id WHERE cart.c_id = '$a'";
	
		return $this->db_fetch_all($sql);
	
	}
	function total_cart_price_cls($a){
		$sql = "SELECT (DATEDIFF(leave_date,Res_date)*(products.product_price)) FROM `cart` 
		INNER JOIN `products` ON cart.p_id = products.product_id WHERE cart.c_id ='$a'";
	
		return $this->db_fetch_one($sql);
	
		
	}
	function update_product_cls($a,$b,$c,$d,$e,$f,$g){
    
		$sql="UPDATE `products` SET `product_cat`='$a',
		`product_title`='$b',`product_price`='$c',`product_desc`='$d',`product_image`='$e',`product_keywords`='$f' WHERE `product_id`=$g";
		return $this->db_query($sql);
	}

	

	}

	














	

	//--SELECT--//


	//--UPDATE--//



	//--DELETE--//
	



?>