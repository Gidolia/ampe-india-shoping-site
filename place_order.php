<?php
include('config.php');
 $qry="SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'";
    $res=$con->query($qry);
    $numr=$res->num_rows;
    $total_qty=0;
    $total_price1=0;
    $total_mrp=0;
    $total_dp=0;
    while($val=$res->fetch_assoc()){
        //total quantity of products
        $total_qty=$total_qty+$val[p_qty];
        $total_price1=$total_price1+$val[p_total];
    }

?>
<!DOCTYPE html>
<html>
<head>
<title>Place Order</title>
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
			<h2>Billing Details</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class="container">
		<div class="account">
		<div class="account-pass">
		<div class="col-md-6 account-top">
			<form  method="post" action="process_checkout.php">
				
			<div> 	
				<span>Name</span>
				<input type="text" name="name" value="<?php echo $d_detail[name]?>" class="form-control">
			</div>
			<div> 	
				<span>Email</span>
				<input type="email" name="email" value="<?php echo $d_detail[email]?>" class="form-control"> 
			</div>
			<div> 
				<span >Mobile</span>
				<input type="text" name="mobile" value="<?php echo $d_detail[mobile]?>">
			</div>
			<div> 
				<span >Gender</span>
				<select name="gender" class="form-control" required>
				    <option>Select Gender*</option>
				    <option>Male</option>
				    <option>Female</option>
				</select>
			</div>
			<div> 
				<span >Address</span>
				<input type="text" name="address" value="<?php echo $d_detail[address]?>">
			</div>
			<input type="hidden" value="<?php echo $total_price1;?>" name="price">
			
			
		</div>
	<div class="col-md-4 cart-total">
			 <a class="continue" href="products.php">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
			
			<div class="clearfix"> </div>
			 <table cellpadding="5px" cellspacing="5px">
			 <thead>
		  	    <tr>
		  	        <th>Name</th>
		            <th>Price</th>
		  	        <th><center>Qty</center></th>
		  	        <th>Total</th>
		        </tr>
		    </thead>
		    <tbody>
		<?php
		 $hg=$con->query("SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'");
		 while($hgg=$hg->fetch_assoc()){
		 ?>
			    <tr>
		        	<td><?php echo $hgg[p_name]?></td>
		        	<td><?php echo "<p style='color:green;'>₹".$hgg[p_dp]."</p>"?></td>
		        	<td><?php echo "<center>".$hgg[p_qty]."</center>"?></td>
		        	<td><?php echo "₹".$hgg[p_total]?></td>
		        </tr>
        <?php
		 }
        ?>	
			   <!--<li id="gtotal"><span class="totalfinal"  style="color:red;" id="gtotal" ></span></li>-->
			  </tbody>
		                					<tfoot>
		                					    <td>Total Price :</td>
		                					    <td></td>
		                					    <td></td>
		                					    <td><?php echo "<p style='color:red;float:right;'>₹".$total_price1."</p>";?></td>
		                					</tfoot>
		                				</table>
			</div>	
			 <div class="clearfix"></div><br><br>
			 <button class="btn btn-primary py-2 px-4" type="submit" name="btn_reg">Confirm Checkout</button>
			 
			</div>
	<div class="clearfix"> </div>
	</div>
	</div>
</form>
</div>

<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			