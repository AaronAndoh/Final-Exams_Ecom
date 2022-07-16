<?php 
require("../controllers/product_controller.php");

require('../settings/core.php');

$cid= $_SESSION['customer_id'];

if(!is_user_logged_in()){
  header("location:../login/login.php");
  }

  $total=total_cart_price_ctr($_SESSION['customer_id']);

  
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Payment</title>

    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->  
<!---strat-date-piker---->
<div class="container">
			<div class="header-left">
				<!--logo -->
			
					<a style="color:black"href="../view/welcome_page.php"><h1>Nhyira Hotel</h1></a>
                			
				<!--//logo-->
				<div class="user-right">
                    
					<div class="profile_details_left"><!--notifications of menu start -->
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="images/a.png" alt=""> </span> 
											<div class="clearfix"></div>	
										</div>	
									</a>
								
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="profile_medile"><!--notifications of menu start -->
				<ul class="nofitications-dropdown">
					<li class="dropdown head-dpdn">
						<a href="welcome_page.php" class="dropdown-toggle" >Home</i></a>
                        <a href="show_rooms.php" class="dropdown-toggle" >Rooms</i></a>
                        <a href="gallery.php" class="dropdown-toggle" >Gallery</i></a>
                        <a href="reservation.php" class="dropdown-toggle" >Reservation</i></a>
                        <a href="product.php" class="dropdown-toggle" >About us</i></a>
                        <a href="product.php" class="dropdown-toggle" >Contact us</i></a>
                      <?php  ?>  <a href="../actions/logout.php" class="dropdown-toggle" >Logout</i></a><?php  ?>



							
					</li>
					
				</ul>
            
			</div>
            <div>

            </div>
            <div class="header-right">
					<!--toggle button start-->
					<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31">
					</form>
				</div>
				<div class="clearfix"> </div>
				<!--toggle button end-->
			</div>
</div>
			
    </head>
<style>
.body { 
    

    background-color: white;



}
.try {
height: 200px;
background: white;
display: flex;
align-items: center;
justify-content: center;

}


</style>

<body>


<h3><h3>
<div class="try">
    <div class="child">
<form id="paymentForm">
  <div class="form-group">
   <label for="email">Email Address</label>
   <input type="email" id="email-address" required />
 </div>
 <div class="form-group">
   <label for="amount">Amount</label>
   <input readonly type="tel" id="amount"  value="<?php echo $total['(DATEDIFF(leave_date,Res_date)*(products.product_price))']?>" required />
 </div>
  
  <div class="form-submit">
    <button  onclick="payWithPaystack()"> Pay </button>
  </div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script> 


<script type="text/javascript">
	
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack() {
  event.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_057c9db199308fc4166825e8b57cc8510a316319', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1),
    currency:'GHS',

     // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      
      let message = 'Payment complete! Reference: '+ response.ref
      console.log(response.status);
      
        email = document.getElementById("email-address").value;
        amount = document.getElementById("amount").value;
        console.log(email);
        console.log(amount);

       dataString = 'email='+ email +'&amount='+amount;
if (response.status=='success') {
      $.ajax({
        type: "POST",
        url:"../actions/payment_proc.php",
        data: dataString,
        cache:false,
        success:function(result){
        alert(result);

         window.location="payment_success.php";
        }


      });
     }
     
}






  });

  handler.openIframe();
}


</script>
</body>
</html>
