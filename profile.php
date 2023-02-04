<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
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
			<h2>Profile</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div >
			
<div class="container">
	<div class="row" style="margin-top:30px;">
			<div class="  col-lg-6 col-sm-6" style="padding:30px;">
                <div class="row">
          <div class="col-lg-12 ">
              <h3><b>Full Name :</b><span  ><?php echo $d_detail['name'];?></span></h3>
              
          </div>
          <div class="col-lg-12">
              <span><h3><b>Phone Number :</b><span><?php echo $d_detail['mobile'];?></span> </h3></span>
          </div>
          <div class="col-lg-12">
              <span><h3><b>Email  :</b><span ><?php echo $d_detail['email'];?></span></h3></span>
          </div>
          <div class="col-lg-12">
              <span><h3><b>Address :</b><span  ><?php echo $d_detail['address'];?></span></h3></span>
          </div>
          
          <div class="col-lg-12">
              <span><h3><b>Regsiteration Date :</b><span  ><?php echo $d_detail['r_date'];?></span></h3></span>            
          </div>
      </div>
            </div>
            <div class="  col-lg-6 col-sm-6" style="padding:30px;">
                <div class="row">
                    <a href="products.php"><img src="images/pp.jpeg" style="height:250px;width:100%; border-radius:20px;" ></a>
                    
                </div>
            </div>
    </div>
</div>
		
</div><br><br><br>
<div class="container" style="margin-bottom:20px;">
    <a href="products.php"><div style="border:1px solid black;padding:10px;border-radius:10px;background-color:#8CE78A;color:white;">
        <h4>All Products<span style="float:right;">-></span></h4>
    </div></a><br>
    <a href="order.php"><div style="border:1px solid black;padding:10px;border-radius:10px;background-color:#8CE78A;color:white;">
        <h4>Order History<span style="float:right;">-></span></h4>
    </div></a><br>
    <a href="logout.php"><div style="border:1px solid black;padding:10px;border-radius:10px;background-color:#8CE78A;color:white;">
        <h4>Sign Out<span style="float:right;">-></span></h4>
    </div>
    </a>
    
    
</div>
<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			