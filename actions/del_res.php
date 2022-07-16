
<?php require ("../controllers/reservation_controller.php");
 //require ("../controllers/cart_controller.php");
session_start();
$cid =$_SESSION['customer_id'];



$id = $_POST['info'];
 //echo "$id";



$del=delete_cart_ctr($id,$cid);

    if($del){
        echo"Your reservation has been cancelled";
    }
    else{

        echo"he went to do online";
    }

?>