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
                            <div class="products mb-3">
<?php
 $r=$con->query("SELECT * FROM `order_bill_detail` WHERE `ob_id`='$_GET[id]' ORDER BY `obd_id` DESC LIMIT 0,10");
 $a=0;
 while($val=$r->fetch_assoc()){
     $s=$con->query("SELECT * FROM `product` WHERE `p_id`='$val[p_id]'");
     while($val1=$s->fetch_assoc()){
 ?>	

                                <div class="product product-list">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <figure class="product-media" style="height:170px;width:100%">
                                                <a href="single.php?id=<?php echo $val1[p_id]?>">
                                                    <img src="./admin/ibo_panel/production/images/<?php echo $val1[image1]?>" alt="Product image" class="product-image" style="height:150px;width:100%">
                                                </a>
                                            </figure><!-- End .product-media -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-6 col-lg-3 order-lg-last">
                            <div class="product-body product-action-inner">
                                    <div class="product-price">
                                        <?php echo "<h3>".$val1[name]."</h3>";?>
                                    </div>
                                    <div class="product-price">
                                        Quantity :
                                        <?php echo $val[p_qty];?>
                                    </div>
                                    <div class="product-price">
                                        Unit Price :
                                        <?php echo "₹".$val[p_dp];?>
                                    </div>
                                    
                                    <div class="product-price">
                                        Total Price :
                                        <?php echo "₹".$val[p_total];?>
                                    </div>
                                               
                                            </div><!-- End .product-list-action -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        
                                    </div><!-- End .row -->
                                </div>
                                
<?php
}
}
?>
                            </div><!-- End .products -->
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
			