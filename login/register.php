<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
// require 'db_cred';



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nhyira Hotel | Register </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="../css/NH.css" rel="stylesheet" type="text/css" >
<link href="../css/validation.css" rel="stylesheet" type="text/css" >

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900iSlabo+27px&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
<body>
<!--header-->
<div class="agileheader">
<h1><img style="width:250px" src=../images/nn.png></h1>
</div>
<!--//header-->

<!--main-->
<div class="main-w3l">
<div class="w3layouts-main">
	<h2>SIGN UP</h2>
		<form action="../actions/reg_proc.php" method="post" enctype='multipart/form-data'>
			<input value="USERNAME" name="name" type="text" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}"/>
			<input value="E-MAIL" name="Email" type="email" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"/>
			<input value="PASSWORD" name="Password" id="psw" type="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>

			<div id="message">
						<h3>Password must contain the following:</h3>
						<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
						<p id="number" class="invalid">A <b>number</b></p>
						<p id="length" class="invalid">Minimum <b>8 characters</b></p>
			</div>
			

			<input value="COUNTRY" name="country" type="text" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'country';}"/>
			<input value="CITY" name="city" type="text" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'city';}"/>
			<input value="CONTACT" name="contact" type="tel" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'contact';}"/>
			<input value="image" name="image" type="file" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'image';}"/>
			
			<!-- <span><input type="checkbox" />Remember Me</span> -->
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clear"></div>
				<input type="submit" value="SignUp" name="signup">
		</form>
		<p>Already have an account ?<a href="login.php">Login Now</a></p>
</div>
</div>


<script type="text/javascript" src="../js/validation.js"></script>

<!--//main-->

<!--footer-->
<div class="footer-w3l">
	<!-- <p>&copy; 2017 Smart Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
</div>
<!--//footer-->

</body>
</html>