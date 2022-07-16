<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require("../controllers/product_controller.php");
require ('../settings/core.php');

// if(!is_user_logged_in_admin()){
// header("location:../view/error.php");
// }
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
					<a href="index.html"><h1>Nhyira Hotel</h1></a>
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
						<a href="dashboard.php" class="dropdown-toggle">Home</i></a>
                        <a href="room_cat.php" class="dropdown-toggle" >Rooms</i></a>
                        <a href="product.php" class="dropdown-toggle">Products</i></a>
							
					</li>
					
				</ul>
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
        <style>
            .control{
                width:700px;
                color:#347cda;
            }
            </style>
		<!-- //header-ends -->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="four-grids">
					<div class="col-md-3 four-grid">
                    <?php
                            $pid=$_GET['up_id'];
							$select = select_one_cat_ctr($pid);
        	

						 ?>
						<form action="../actions/update_proc_cat.php" method="POST">
                        <label> Enter The type of room</label>
                    <input type="text" class="control"  name="room_up" value="<?php echo $select["cat_name"] ?>" required><br><br>
                                <input type="hidden" value = "<?php echo $select['cat_id']?>" name="idd">



                    <button type="submit" name="send"class="label label-success" style="width: 150px;"> submit</button>

                        </form>
					
                        <div class="bottom-table" >
				    <div class="bs-docs-example" >
					<table class="table table-hover">
						<thead>
							<tr>
							  <th>Room ID</th>
							  <th>Room Type</th>
							  <th></th>
							</tr>
						</thead>
						
				
							<tbody>
									<tr>
									<input type="hidden" value="<?php echo $select["cat_id"] ?>" id="info">
							<td ><?php echo $select["cat_id"] ?></td>
                            <td ><?php echo $select["cat_name"] ?></td>
							
						
                                
                            
							
                          
										
										<!-- <td><h5>85% <i class="fa fa-level-up"></i></h5></td> -->
									</tr>

						</tbody>
					</table>
		</div>
			 </div>
				    </div>
	            </div>
           
				
\			<div class="copy-section">
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
				
				<script>
					 var icons = new Skycons({"color": "#68b828"}),
						  list  = [
							"clear-day"
						  ],
						  i;

					  for(i = list.length; i--; )
						icons.set(list[i], list[i]);

					  icons.play();
				</script>
			
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
				
			</div>

			<!-- //Register -->


</body>
</html>
