<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require ("../controllers/product_controller.php");

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>NHyira Hotel | Home </title>
<link href="../css/bootstrap1.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="../css/style2.css" rel="stylesheet" type="text/css" media="all" />	
<link href="../css/font-awesome.css" rel="stylesheet">
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
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap1.min.js"></script>
<!---->
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
<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<link href="../css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.sparkline.min.js"></script>
<script type="text/javascript">

<!---strat-date-piker---->
<!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->

</head>
<body>
	<div class="banner-section">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slider-info">
							<img src="images/ba1.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>Outdoor & Indoor Luxury</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="images/ba2.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>Luxury & Oriental Harmony</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<img src="images/ba3.jpg" class="img-responsive" alt="">
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>A Brand New Hotel</h3>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
			<!-- FlexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
					$(window).load(function(){
					$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
					});
					});
				</script>
			<!-- FlexSlider -->
			<!-- slider -->
	</div>
    <div class="header">
		<div class="container">
			<div class="header-left">
				<!--logo -->
			
					<a style="color:black"href="#"><h1>Nhyira Hotel</h1></a>
                			
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
						<a href="#" class="dropdown-toggle" >Home</i></a>
                        <a href="show_rooms.php" class="dropdown-toggle" >Rooms</i></a>
                        <a href="reservation.php" class="dropdown-toggle" >Reservation</i></a>
						<?php if($_SESSION['customer_id']){ ?> <a href="../actions/logout.php" class="dropdown-toggle" >Logout</i></a><?php } 
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
			<div class="clearfix"> </div>	
		</div>
			<div class="clearfix"></div>
			</div>	
		</div> 

	</div>
    
		<!---header--->		
		<div class="content">
			<!---welcome--->
			<div class="welcome">
				<div class="container">
					<h2 class="tittle">Welcome To Nhyira Hotel</h2>
						<p style="text-align:center"class="wel text"> The Best of Ghanaian Hospitality</p>
					<div class="wel-grids">
						<div class="col-md-3 wel-grid">
							<img src="../images/hotel.jpeg" class="img-responsive gray" alt=""/>
							<h4>24/7 Security</h4>
							<p>Your safety is our foremost concern.</p>
						</div>
						<div class="col-md-3 wel-grid">
							<img src="../images/lobby-new.jpg" class="img-responsive gray" alt=""/>
							<h4>Resturant</h4>
							<p>We offer the finest regional cuisine in the area. We make you feel at home by serving delicious food. Jollof, banku, whatever!</p>
						</div>
						<div class="col-md-3 wel-grid">
							<img src="../images/pic2.png" class="img-responsive gray" alt=""/>
							<h4>Free WI-FI</h4>
							<p>Free and speedy internet to keep you connected to the outside world, a secure environment for all your business needs, and of course, relaxation.</p>
						</div>
						<div class="col-md-3 wel-grid">
							<img style="height: 110px; width:100%" src="../images/9e.jpeg" class="img-responsive gray" alt=""/>
							<h4>Fully air conditioned Rooms</h4>
							<p>Everyone has access to clean, inexpensive lodgings. We provide rapid and among the best customer service in the industry. It is only a phone away. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
            
			<!---welcome--->
			<div class="resort-section">
				<div class="container">
					<h3 class="tittle">Resort latest <span>deals</span></h3>
					<div class="resort-grids">
				<!-- start content_slider -->
               
						<div id="owl-demo" class="owl-carousel">
					        <div class="item">
                            <?php
                
                $three = select_three_rooms_ctr();
              
                
                
                ?>
					           <div class="col-md-6 cap-img">
									<img src="<?php echo $three[0]['product_image']; ?>" class="img-responsive gray" alt=""/>
								</div>
								<div class="col-md-6 cap">
									<h4><?php echo $three[0]['product_title']; ?></h4>	
									<ul class="cap1">
										<li><i class="glyphicon glyphicon-map-marker"></i> West Anaji, Ghana</li>
										<li><i class="glyphicon glyphicon-plane"></i> Close to Airport</li>
									</ul>										
									<p><?php echo $three[0]['product_desc']; ?><?php echo $three[0]['product_desc']; ?><?php echo $three[0]['product_title']; ?>andit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
									<div class="detais">
										<div class="col-md-9 deatils-left">
											<div class="list">
												<ul>
													<li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
													<li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M. - 12:09 P.M.</li>
													<li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3 deatils-right">
											<div class="detail-top">
												<span>PER NIGHT</span>
												<h4>$<?php echo $three[0]['product_price']; ?></h4>
											</div>
                                            
										</div>
                                       
										<div class="clearfix"> </div>
                                       
									</div>
                                    
								</div>
					            <div class="clearfix"> </div>
					        </div>	
				        </div>
					</div>
				</div>
			</div>
			<div class="superlist">
				<div class="container">
					<h3 class="tittle">Hand Picked by Superlist</h3>
					<p class="wel text"> Nhyira Hotel is equipped with state-of-the-art facilities. We are located at West Anaji, a suburb of Takoradi in the Western region of Ghana. Our hotel is just 10 minutes
                     drive from the Takoradi Airport. We are, therefore, a perfect choice for not only leisure, but also business tourists traveling to Takoradi, Ghana. 
                    The hotel has a set of 15 fully air-conditioned suites to accommodate its guests. We also house a spacious air-conditioned restaurant and a well stocked bar..</p>
					<div class="super-grids">
						<div class="col-md-8 super-grid">
							<div class="super-top">
							<img src="../images/54.jpeg" class="img-responsive gray" alt=""/>
							</div>
							<div class="super-bottom">
								<div class="col-md-6 super-left">
								<img src="../images/7e.jpeg" class="img-responsive gray" alt=""/>
								</div>
								<div class="col-md-6 super-right">
								<img src="../images/6e.jpeg" class="img-responsive gray" alt=""/>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 super-grid1">
							<div class="super-top">
								<img src="../images/p3.jpeg" class="img-responsive gray" alt=""/>
									<h4>Luxury Suite</h4>
									<p> At Nhyira Hotel we have a dedicated team of highly experienced, well trained, and courteous 
									staff, which will ensure that you receive the best customer service with genuine hospitality. From the 
									moment you book a room at our hotel you will experience the unmatched, highly professional and impeccable 
									service that have made us a name in the hotel business. When you stay at Nhyira Hotel, you will get to know
									 the difference! We take great care in turning every interaction with our
									 visitors into a truly positive one and pay attention to each and every detail.</p>
							</div>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			</div>
		
		</div>
		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Get In Touch</h4>
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
							<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"><a href="mailto:info@example.com">info@example.com</a></a></li>
							<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
						</ul>
					</div>
					
					<div class="col-md-3 footer-grid">
						<h4>Our Rooms</h4>
						<ul>
							<li>Single Standard Room</li>
							<li>Premium single Room</li>
							<li>Standard double Room</li>
							<li>Executive Corner Room</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Our Services </h4>
						<ul>
							<li>Room services</li>
							<li>Free internet Wifi</li>
							<li>Television (50 channels)</li>
							<li>No Pets allowed</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
		
			<div class="copy-section">
				<div class="container">
				</div>
			</div>


</body>
</html>
