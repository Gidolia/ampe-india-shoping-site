<?php
session_start();
if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
    include('config.php');
}else{
    include('database_connect.php'); 
}

      if(isset($_POST[submit])){
          $qry="INSERT INTO `contact`(`contact_id`, `name`, `email`, `subject`, `message`,`c_date`,`c_time`) VALUES (NULL,'$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]','$date','$time');";
          if($con->query($qry)===TRUE){
              echo"<script>alert('Contacted Successfully ! Admin Will Contact You Soon !! Thank You');location.href='contact.php';</script>";
          }else{
               $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Contact Insert Query');";
    	        $con->query($fail);
            echo "<script>alert('Failed ! to Contact plz try again'); location.href='contact.php';</script>";
          }
      }
      
     
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
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
			<h2>Contact</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form  method="post">
						<input type="text" placeholder="Name" name="name">
					
						<input type="text" placeholder="Email" name="email">
						<input type="text" placeholder="Subject" name="subject">
						
						<textarea cols="77" rows="6" placeholder=" " name="message"></textarea>
						<div class="send">
							<input type="submit" value="Send" name="submit">
						</div>
					</form>
				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4>Address</h4>
							<p>Gwalior,</p>
							<p>Madhya Pradesh,</p>
							<p>India. </p>
						</div>
						<div class="address-more">
						<h4>Address1</h4>
							<p>Tel:XXXXXXXXXX</p>
							<p>Fax:XXXXXXXXXX</p>
							<p>Email:<a href="mailto:ampeindia@gmail.com"> ampeindia@gmail.com</a></p>
						</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--<div class="map">-->
			<!--	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>-->
			<!--</div>-->
		</div>
		
	</div>
<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			