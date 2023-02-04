<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
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
			<h2>Checkout</h2>
		</div>
	</div>
	<!-- grow -->
<div class="container">
	<div class="check">	 
			 <h1>My Shopping Bag</h1>
		 <div class="col-md-9 cart-items">
		
<?php
$qry="SELECT * FROM `add_cart` WHERE `c_id`='$d_detail[c_id]'";
$qr=$con->query($qry);
if($qr->num_rows >0){
$aau="0";
while($val=$qr->fetch_assoc()){
?>	
<form action="update_cart.php" method="post">
<input type="hidden" value="<?php echo $val[ac_id]?>" name="id">
<input type="hidden" value="<?php echo $val[p_id]?>" name="pid">
<input type="hidden" value="<?php echo $val[p_mrp]?>" name="dp" >
<input type="hidden" value="<?php echo $val[p_dp]?>" name="d" class="iprice">
			
			 <div class="cart-header">
				 <!--<div class="close1"> </div>-->
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<a href="single.php?id=<?php echo $val[p_id]?>"><img src="admin/ibo_panel/production/images/<?php echo $val[p_image]?>" class="img-responsive" alt="" style="height:200px;"></a> 
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo $val[p_name]?></h3>
						<ul class="qty">
							<li><h3>Unit Price :<?php echo "<del>₹".$val[p_mrp]."</del>&nbsp;&nbsp;"?><?php echo "₹".$val[p_dp]?></h3></li>
							<li><h3>Quanitity :<input min="1" type="number" id="quantity" name="qty" value="<?php echo $val[p_qty]?>" class="entry value form-control input-small iquantity" onchange="subTotal();"  ></h3></li>
							<li>Total Price :<h3 class="itotal"><?php echo "₹".$val[p_qty]?></h3></li>
							
						</ul>
						
                        	
									 
                        
						
							 <div class="delivery">
							 <h1><button class="btn btn-outline-primary-2 " type="submit" name="upd">Update</button>
                                <button class="btn btn-outline-primary-2 mt-2" type="submit" name="remove">Remove</button></h1>
							 
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
</form>
<?php
}

}else{
?>
<div style="margin-top:100px;">
<center><img  src="images/nofound.gif" height="200px" width="200px"></center>
<center><h3>Products In Your Cart</h3></center>

<center><a href="index.php" style="font-size:20px;"><<< Go to Home Page</a></center>
</div>
	
	
<?php
}
?>		 
		 </div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="products.php">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
			
			<div class="clearfix"> </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li id="gtotal"><span class="totalfinal"  style="color:red;" id="gtotal" ></span></li>
			  </ul>			
			</div>	
			 <div class="clearfix"></div>
			 <a class="order" href="place_order.php">Place Order</a>
			 
			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


<!--//content-->
<?php
include('include/footer.php');
?>
</body>
<script src="js/main.js"></script>
    <script>
    var gt=0;
    var ht=0;
    var iprice=document.getElementsByClassName("iprice");
    var iquantity=document.getElementsByClassName("iquantity");
    var itotal=document.getElementsByClassName("itotal");
    var gtotal=document.getElementById("gtotal");
   //var htotal=document.getElementsByClassName("iprice");
    
    function subTotal(){
        var gt=0;
        //var ht=0;
        for(i=0;i<iprice.length;i++){
             itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
             //itotal[i].innerText=(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
            //ht=ht+(iprice[i].value);
        }
        gtotal.innerText=gt;
        //htotal.innerText=ht;
    }
    subTotal();
</script>
</html>
			