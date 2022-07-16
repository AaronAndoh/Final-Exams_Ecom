<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require("../controllers/customer_controller.php");
//require_once("../controllers/product_controller.php");
require ('../settings/core.php');

if(!is_user_logged_in_admin()){
header("location:../view/error.php");
}

$count_user=number_of_users_ctr();
$ava=select_avaliable_ctr();
$una=select_unavaliable_ctr();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Administrator | dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ultra Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--skycons-icons-->
<script src="../js/skycons.js"></script>
<!--//skycons-icons-->

 <!-- js-->
  <script src="../js/bootstrap.js"></script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<!--webfonts-->
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
    /* <![CDATA[ */
    $(function() {
        /** This code runs when everything has been loaded on the page */
        /* Inline sparklines take their values from the contents of the tag */
        $('.inlinesparkline').sparkline(); 

        /* Sparklines can also take their values from the first argument passed to the sparkline() function */
        var myvalues = [10,8,5,7,4,4,1];
        $('.dynamicsparkline').sparkline(myvalues);

        /* The second argument gives options such as specifying you want a bar chart11 */
        $('.dynamicbar').sparkline(myvalues, {type: 'bar', barColor: '#fff'} );

        /* Use 'html' instead of an array of values to pass options to a sparkline with data in the tag */
        $('.inlinebar').sparkline('html', {type: 'bar', barColor: '#fff'} );

    });
    /* ]]> */
    </script>
	
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
	
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="../view/welcome_page.php"><h1>Nhyira Hotel</h1></a>
				</div>
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
										<li> <a href="../actions/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
                        <a href="room_cat.php" class="dropdown-toggle" >Rooms</i></a>
                        <a href="product.php" class="dropdown-toggle" >Products</i></a>
							
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
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<div class="clearfix"> </div>
				<!--toggle button end-->
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-grid1">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<h4><?php  echo $count_user["count(`customer_id`)"]; ?> </h4>
								<p> <span class="inlinebar">1,3,4,5,3,5</span> </p>
							</div>
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-grid2">
							<div class="icon">
								<i class="glyphicon glyphicon-align-justify " aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Reservation</h3>
								<h4>15</h4>
								<p><span class="dynamicbar">Loading..</span></p>
							</div>
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-grid3">
							<div class="icon">
								<i class="glyphicon glyphicon-bell" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Payment</h3>
								<h4>9 New</h4>
								<p> <span class="inlinebar">1,3,4,5,3,5</span> </p>
							</div>
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-grid4">
							<div class="icon">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Rooms</h3>
								<h4>15</h4>
								<p><span class="dynamicbar">Loading..</span></p>
							</div>
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</div>
					</div>
					
				</div>
				
				<script src="../js/amcharts.js" type="text/javascript"></script>
		        <script src="../js/serial.js" type="text/javascript"></script>
		        <script src="../js/amstock.js" type="text/javascript"></script>

	
		

		
				
					<div class="clearfix"></div>
				
				<div class="weathers-grids">
					<div class="col-md-6 weather-grid">
					<div class="main-info">
					<div class="weather-top">	
						
						
						
						<div class="clearfix"> </div>
					</div>
				
			
			</div>
		</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="piechat-section">
					<div class="col-md-4 pie-chat">
						<div class="content-top-1">
							<div class="col-md-6 top-content">
								<h5>Avaliable rooms</h5>
								<label><?php echo $ava[0]['count(`status`)'];?></label>
							</div>
							<div class="col-md-6 top-content1">	   
								<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 pie-chat">
						<div class="content-top-1">
							<div class="col-md-6 top-content">
								<h5>Not Avaliable</h5>
								<label><?php echo $una[0]['count(`status`)'];?></label>
							</div>
							<div class="col-md-6 top-content1">	   
								<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 pie-chat">
						<div class="content-top-1">
							<div class="col-md-6 top-content">
								<h5>Messages</h5>
								<label>0</label>
							</div>
							<div class="col-md-6 top-content1">	   
								<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
					<div class="photoday-section">
						<div class="col-md-4 photoday-grid">
							
						</div>
						<div class="col-md-4 photoday-grid">
						
							<div class="col-md-4 photoday-grid">
								
								</div>
								<div class="progress-bottom">
									<div class="cal-left">
										<div class="cal">
											<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
										</div>
										<div class="cal-text">
											<h4><?php echo date("l jS F ") . "<br>"?></h4>
										</div>
									</div>
									<div class="time-right">
									<div class="cal">
									<i class="glyphicon glyphicon-time" aria-hidden="true"></i>
									</div>
									<div class="cal-text">
									<h4><?php echo date("h:i A") . "<br>"?></h4>
									</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
					</div>
						<div class="row calender widget-shadow">
					<div class="cal1">
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="copy-section">
		<p>&copy; 2016 Ultra Modern. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
			<!-- Classie -->
				<script src="../js/classie.js"></script>
				<script>
					var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
						showLeftPush = document.getElementById( 'showLeftPush' ),
						body = document.body;
						
					showLeftPush.onclick = function() {
						classie.toggle( this, 'active' );
						classie.toggle( body, 'cbp-spmenu-push-toright' );
						classie.toggle( menuLeft, 'cbp-spmenu-open' );
						disableOther( 'showLeftPush' );
					};
					

					function disableOther( button ) {
						if( button !== 'showLeftPush' ) {
							classie.toggle( showLeftPush, 'disabled' );
						}
					}
				</script>
			<!-- Bootstrap Core JavaScript --> 
				
				<script type="text/javascript" src="../js/bootstrap.min.js"></script>
				<!--scrolling js-->
				<script src="../js/jquery.nicescroll.js"></script>
				<script src="../js/scripts.js"></script>
				<link href="../css/bootstrap.min.css" rel="stylesheet">

				<!--//scrolling js-->
				<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="more-grids">
									<h3>New Message </h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- //Register -->


</body>
</html>
