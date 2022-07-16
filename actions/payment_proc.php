   

<?php
require('../controllers/reservation_controller.php');

session_start();
$cid= $_SESSION['customer_id'];

$email = $_POST['email'];
  $amount = $_POST['amount'];

  echo"$cid";

  

$url = "https://api.paystack.co/transaction/initialize";

  $fields = [
    'email' => "$email",
    'amount' => $amount
 ];

  $fields_string = http_build_query($fields);

  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_d05e5a72a8d18503d798a15197dd09d7b05befef",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
  $result = curl_exec($ch);
  echo $result;

  $invoice= mt_rand();
  $date = date("Y-m-d");


$order=insert_orders_ctr($cid,$invoice,$date);

if($order){
  echo"order recorded";
}
else{
  echo "order not recorded";
}

$order_id=get_order_id_ctr();
$order_date=get_order_date_ctr();

$oi=$order_id['order_id'];
$od=$order_date['order_date'];



$payment = insert_payments_ctr($amount,$cid,$oi,$od);
    if ($payment) {
      echo "success";
    }
    else{
      echo "failed";
    }

  $cartd =get_cart_details_ctr($cid);


  $p_id=$cartd['p_id'];
  $qty=$cartd['qty'];


  $orderdetails=insert_orderdetails_ctr($oi,$p_id,$qty);
  if($orderdetails){
    echo "order details";

  }
  else{
    echo"order not working details";
  }

  $del_cart=delete_After_payment_ctr($cid);

  if ($del_cart) {
   echo "order taken, Thank you";
  }
  else{
    echo"last push";
  }

  
?>
