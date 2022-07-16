<?php require("../controllers/product_controller.php");

session_start();
$cid= $_SESSION['customer_id'];
echo "$cid";
$id = $_GET['id'];
echo"$id";
$item = select_id_product_ctr($_GET['id']);

// print_r($item);

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
    
    <div class="reservation">
				<div class="container">
					<h3 class="tittle">Make reservation</h3>
                    <h4>Select room of your choice here</h4><a style="color:blue"href="show_rooms.php">Rooms</a>
					<div class="reservation-grids">
						<div class="col-md-4 reser-grid">
							<h5>Check in</h5>
                            <form action=../actions/reservation_proc.php method="POST">
							<div class="book_date">							
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input type="date" name="check_in">													
							</div>
						</div>
						<div class="col-md-4 reser-grid">
							<h5>Check out</h5>
							<div class="book_date">							
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input name="check_out" type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">													
							</div>

						</div>
						<div class="col-md-4 reser-grid">
							<h5>Adults:</h5>
							<div class="best-hot">
								<input name="adults" type="number" value="Adults" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type Here';}">
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="reservation-grids">
						<div class="col-md-4 reser-grid">
							<h5>Kids:</h5>
							<div class="best-hot">
								<input name="kids" type="number" value="Kids" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type Here';}">
                               
							</div>
						</div>
						<div class="col-md-4 reser-grid">
							<h5>Room:</h5>
                            <input readonly type="text" value="<?php echo $item[0]['cat_name'] ?>">
                            <input type="hidden" value="<?php echo $item[0]['product_id'] ?>" name="pid">
                                
                                           
    
                            
						</div>
						<div class="col-md-4 reser-grid">
							<div class="best-hot">
                            <!-- <button class="label label-danger"   style="width: 100px; height: 40px;">Check</button> -->
                                
								<input style="width:190px"  type="submit" value="Check">
							</div>
                                        </form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
           
                        <script>
                            function res(id) {
                            inputbx = document.getElementById("check_in").value;
                            inputbx2 = document.getElementById("check_out").value;
                            inputbx3 = document.getElementById("adults").value;
                            inputbx4 = document.getElementById("kids").value;
                            inputbx5 = document.getElementById("rooms").value;




                            

                        dataString = 'checkin='+ inputbx+'&checkout='+ inputbx2+ '&adults='+inputbx3+'&kids='+inputbx4+'&room='+inputbx5+'&id='+id;

                        $.ajax({
                            type: "POST",
                            url:"../actions/reservation_proc.php",
                            data: dataString,
                            cache:false,
                            success:function(result){
                            alert(result);
                            }


                    });
                    }
                                
                        </script>




            <div class="bottom-table" >
                                <div class="bs-docs-example" >
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Room Type</th>
                                        <th>nights<th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                
                                    <?php

                                       

                                        $select_product = select_res_ctr($_SESSION['customer_id']);
                                        //print_r($select_product);

                                        


                                        foreach ($select_product as $product) {

                                    ?>
                            
                                        <tbody>
                                                <tr>
                                                <input type="hidden" value="<?php echo $product["product_id"] ?>" id="info">
                                                <td ><?php echo $product["product_title"] ?></td>
                                                <td>
                                            
                                                <?php
                                                   echo $product['date_difference'];
                                                ?>
                                        </td>
                                        <td></td>
                                        
                                                <td ><?php echo $product["product_price"] ?></td>
                                                <td ><img style="width:90px; height:90px" src="<?php echo $product["product_image"] ?>"></td>
                                                <td >
                                                <div class="progress">
					                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%"><span class="sr-only">70% Complete (warning)</span></div>
				                            </div>


                                                </td>
                                                <td></td>
                                            
                                        <td><button class="label label-danger"  onclick ="delDoc(<?php echo $product['product_id'] ?>)" style="width: 100px; height: 40px;">Cancel</button></td>
                                        
                                    
                                                    
                                        <?php }?>
                                                </tr>

                                    </tbody>
                                </table>
                              <a href="reservation_summary.php"> <button  class="label label-success"  style="width: 100px; height: 40px;">Continue</button></a>

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