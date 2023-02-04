<?php
include('database_connect.php');
if(isset($_POST['btn_log'])){
	$a=$_POST['email'];
	$b=$_POST['password'];
   $log="SELECT * FROM `costumer` WHERE `email`='$a' AND `password`='$b'";
   
    $res=$con->query($log);
    
        if($res->num_rows > 0){
         session_start();
          $_SESSION['id']=$a;
          $_SESSION['pass']=$b;
          echo "<script>location.href='./index.php';</script>";
            }else{
                $fail="INSERT INTO `error_fail_report` (`efr_id`, `date`, `time`, `c_id`, `admin_id`, `url`, `failed_query_n`) VALUES (NULL, '$date', '$time', '$_SESSION[id]', '', '$url', 'Login Query');";
    	        $con->query($fail);
            echo "<script>alert('Failed ! Login Fail plz try again'); location.href='login.php';</script>";
        }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
			<h2>Login</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="container">
		<div class="account">
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form  method="post">
				
			<div> 	
				<span>Email</span>
				<input type="text" name="email" placeholder="Enter Email"> 
			</div>
			<div> 
				<span >Password</span>
				<input type="password" name="password" placeholder="Enter Password">
			</div>				
				<input type="submit" value="Login" name="btn_log"> 
			</form>
		</div>
		<div class="col-md-4 left-account ">
			<a href="products.php"><img class="img-responsive " src="admin/ibo_panel/production/images/pro11.jpg" alt="" style="height:250px;"></a>
			<div class="five">
			<h2>25% </h2><span>discount</span>
			</div>
			<a href="register.php" class="create">Create an account !</a>
			<!--<a href="register.php" style="background-color:red;" class="create">Forget Password ?</a>-->
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>

<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			