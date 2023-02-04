<?php
include('database_connect.php');
	if(isset($_POST['btn_reg'])){
	    $nam=$_POST['f_name']." ".$_POST['l_name'];
	   
	 $t="SELECT * FROM `costumer` WHERE `email`='$_POST[email]'";
	 $r=$con->query($t);
	 $num=$r->num_rows;
	 
	 if($num>0){
	   echo "<script>alert('Already Registered');location.href='./register.php';</script>";
	   
	 }else{
	     if($_POST['pass'] == $_POST['con_pass']){
	        $qry="INSERT INTO `costumer`(`c_id`, `name`, `email`, `password`, `mobile`, `gender`, `profile`, `address`, `r_date`, `r_time`) VALUES (NULL,'$nam','$_POST[email]','$_POST[pass]','$_POST[mobile]','','','','$date','$time')";  
             if($con->query($qry)===TRUE){
                 echo "<script>alert('Registered Successfully');location.href='./login.php';</script>";
             }else{
                 echo "<script>alert('Registration Fail');location.href='./register.php?fail';</script>";
             }   
	     }else{
	         echo "<script>alert('Password Not Matched');location.href='./register.php?Password Not Matched';</script>";
	     }
	      
	 }
}
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<?php
include('include/header.php');
?>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Register</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
<div class=" register">
	
		  	  <form  method="post">
				 <div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
					 <div>
						<span>First Name</span>
						<input type="text" name="f_name"> 
					 </div>
					 <div>
						<span>Last Name</span>
						<input type="text" name="l_name"> 
					 </div>
					 <div>
						 <span>Email Address</span>
						 <input type="text" name="email"> 
					 </div>
					 <div>
						 <span>Mobile Number</span>
						 <input type="text" name="mobile"> 
					 </div>
					  
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Login information</h3>
							 <div>
								<span>Password</span>
								<input type="password" name="pass">
							 </div>
							 <div>
								<span>Confirm Password</span>
								<input type="password" name="con_pass">
							 </div>
							 <input type="submit" value="submit" name="btn_reg">
							
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			