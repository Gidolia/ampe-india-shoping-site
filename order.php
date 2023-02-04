<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Order History</title>
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
			<h2>Order History</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="contact">
			<div class="container">
	                	<div class="row">
	                		<div class="col-lg-12">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
            <th>Bill Id</th>
            <th>Bill Name</th>
            <th>Address</th>
            <th>Total Price</th>
            <th>Order Date</th>
            <th>Order lists</th>
                        </tr>
									</thead>

									<tbody>
<?php
$m=$con->query("SELECT * FROM `order_bill` WHERE `c_id`='$d_detail[c_id]' ORDER BY `ob_id` DESC");  
while($v=$m->fetch_assoc()){
?>										<tr>
				<td class="price-col"><?php echo $v[ob_id];?></td>
				<td class="price-col"><?php echo $v[name];?></td>
				<td class="price-col"><?php echo $v[address]?></td>
				<td class="price-col"><?php echo "₹".$v[bill_price]?></td>
				<td class="price-col"><?php echo $v[r_date];?></td>
				<td class="price-col"><a href="order_details.php?id=<?php echo $v[ob_id]?>"><button class="btn btn-primary">View</button></a></td>
											
										</tr>
<?php
}
?>
										
									</tbody>
								</table><!-- End .table table-wishlist -->
	                		</div><!-- End .col-lg-9 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
			
		
</div>
<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			