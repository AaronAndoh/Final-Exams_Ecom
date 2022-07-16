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

class customer_class extends db_connection
{
	//--INSERT--//
	function customer_reg_cls($a, $b, $c, $d, $e, $f, $g)
	{
		// encrypting the password

		$password_encrypted = password_hash($c, PASSWORD_DEFAULT);

		//insert sql function
		
		$sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES ('$a','$b','$password_encrypted','$d','$e', '$f','$g','2')";

		return $this->db_query($sql);
	}

	//--SELECT--//
	
	function login_cls($email,$password){

		// encrypting the password
		$password_encrypted = password_hash($password, PASSWORD_DEFAULT);

		//select email and password for login.
		$sql = "SELECT `customer_id`,`customer_email`, `customer_pass`, `user_role` FROM `customer` WHERE `customer_email` ='$email'";

		return $this->db_fetch_one($sql);
	}


	function number_of_user_cls(){

		$sql = "SELECT count(`customer_id`) FROM `customer` WHERE `user_role`='2'";

		return $this->db_fetch_one($sql);
	}

	function select_avaliable_cls(){
		$sql="SELECT count(`status`) FROM `products`  WHERE `status` = 'avaliable'";
		return $this->db_fetch_all($sql);
	
		}


		function select_unavaliable_cls(){
			$sql="SELECT count(`status`) FROM `products`  WHERE `status` = 'unavaliable'";
			return $this->db_fetch_all($sql);
		
			}


	//--UPDATE--//



	//--DELETE--//
	

}

?>