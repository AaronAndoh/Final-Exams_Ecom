<?php
require("../controllers/reservation_controller.php");
session_start();
$id=$_POST['pid'];
// echo $id;
$check_in = $_POST['check_in'];
$check_out=$_POST['check_out'];
// echo $check_in;
// echo $check_out;
$adults=$_POST['adults'];
// echo $adults;
$info=$_POST['id'];
// echo $info;

$kids=$_POST['kids'];
// echo $kids;


$ip_add=$_SERVER["REMOTE_ADDR"];

$cid=$_SESSION['customer_id'];
// echo $cid;

$check= select_ava_ctr($id);
print_r($check);
//$res=reservation_ctr($rooms,$ip_add,$cid,$check_in,$check_out,$adults,$kids);
if(!count($check)==0){
    $res=reservation_ctr($id,$ip_add,$cid,$check_in,$check_out,$adults,$kids);
    if ($res) {
        echo "reservation completed";
        header("location:../view/reservation.php");
    }
    else{
        echo"something went wrong";
    }


}
else{
    echo"Room is not avaliable";
}







?>