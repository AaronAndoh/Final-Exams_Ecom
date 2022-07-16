<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require("../controllers/product_controller.php");

session_start();


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
	
		<div class="content">
			<!---Rooms--->
			<div class="welcome">
            
				<div class="container">
					<h2 class="tittle">ROOMS AVALIABLE</h2>
						<p class="wel text">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
					<div class="wel-grids">
                    <?php

                   $product = select_product_ava_ctr();



                    //         //for each  to make a loop to display all the items in the brand 
                        foreach ($product as $product) {


                    ?>	<form action="reservation.php" Method="GET">
                            <div class="col-md-3 wel-grid">
							<img style="height: 170px;"src="<?php echo $product['product_image'] ?>" class="img-responsive gray" alt=""/>
							<h4><a style="font-size:17px;color:black"><?php echo $product['product_title'] ?></a></h4>
							<p><a style="font-size:12px"><?php echo $product['product_desc'] ?></a></p>
							<div class="best-hot">
							
							<input type="hidden" value="<?php echo $product['product_id'] ?>" name="id">	
							<input style="width: 225px;"type="submit" value="Book"name="book"></div>
						</div>
						</form>
						<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---Rooms--->
		
			<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">Rooms & Rates</h3>
                    <?php

                         $product_items = select_product_ctr();



                        // //         //for each  to make a loop to display all the items in the brand 
                           foreach ($product_items as $product) {


                        ?>
						<form action="reservation.php" Method="GET">
					<div class="rates-grids">
						<div class="rates-grid">
							<img style="width:700px; height:500px"src="<?php echo $product['product_image'] ?>" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<h3><?php echo $product['product_title'] ?></h3>
							<p><?php echo $product['product_desc'] ?></p>
							<h5>$<?php echo $product['product_price'] ?> <span class="small">/ Night</span></h5>
							<div class="best-hot">
							
							<input type="hidden" value="<?php echo $product['product_id'] ?>" name="id">	
							<input type="submit" value="Book"name="book"></div>
						</div>
							</form>
						</div>
                        <?php } ?>
					</div>
                   
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>


</body>
</html>
