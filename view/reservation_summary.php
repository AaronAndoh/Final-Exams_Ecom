<?php require("../controllers/product_controller.php");
require("../settings/core.php");

$cid= $_SESSION['customer_id'];


if(!is_user_logged_in()){
header("location:../login/login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Best Hotel a  Travel Agency Category Flat Bootstrap Responsive website Template | Rooms :: w3layouts</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../css/style2.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/font-awesome.min.css"> 
<!---->
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
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
										<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
										<li> <a href="login.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
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
                        <a href="reservation.php" class="dropdown-toggle" >Reservation</i></a>
						<?php if($_SESSION['customer_id']){ ?>  <a href="../actions/logout.php" class="dropdown-toggle" >Logout</i></a><?php } 

else{ ?><a href="../login/login.php" class="dropdown-toggle" >Login</i></a><?php }?>

						

							
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
			
</head>
<body>
	<div class="banner">
		
	</div>

    <br> <br>
   
    <div class="alert alert-info" role="alert">
				<h4><strong>Heads up!</strong>  NOTE: You are only 100% assured a room after payment.</h4>
			  </div>
    <h3></h3>  
    <h3> Reservations Made</h3>


            <div class="bottom-table" >
                                <div class="bs-docs-example" >
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Room Type</th>
										<th>Nights</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                
                                    <?php

                                       

                                        $select_product = select_res_ctr($_SESSION['customer_id']);
                                        //print_r($select_product);

                                        $total=total_cart_price_ctr($_SESSION['customer_id']);
										
                                       


                                        foreach ($select_product as $product) {

                                    ?>
                            
                                        <tbody>
                                                <tr>
                                                <input type="hidden" value="<?php echo $product["product_id"] ?>" id="info">
                                                <td ><?php echo $product["product_title"] ?></td>
												<td><?php echo $product["date_difference"] ?></td>
                                                <td ><?php echo $product["DATEDIFF(leave_date,Res_date)*products.product_price"] ?></td>
                                                <td ><img style="width:90px; height:90px" src="<?php echo $product["product_image"] ?>"></td>
                                                <td >
                                                <div class="progress">
					                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%"><span class="sr-only">70% Complete (warning)</span></div>
				                            </div>


                                                </td>
                                            
                                        
                                    
                                                    
                                                    <!-- <td><h5>85% <i class="fa fa-level-up"></i></h5></td> -->
                                                </tr>

                                        <?php }?>
                                        <h3>Total $<?php echo $total['(DATEDIFF(leave_date,Res_date)*(products.product_price))']?></h3>
                                        <div class="best-hot">
											<form action="payment.php" method="POST">
								<input style="width:50%" type="submit" value="Make Payment">
							</div></form>
                                    </tbody>
                                </table>

		</div>

                        </div>


					<script>
			function delDoc(id) {
			
			

				dataString = 'info='+ id;
				// alert(id);
// 
				$.ajax({
					type: "POST",
					url:"../actions/del_res.php",
					data: dataString,
					cache:false,
					success:function(info){
		
	
                  alert(info);
                  window.location="reservation.php";
              		
		
					}


			});
			}
				
		</script>
</div>                               

</body>
</html>