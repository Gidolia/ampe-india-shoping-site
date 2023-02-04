<?php
session_start();
if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
    include('config.php');
}else{
    include('database_connect.php'); 
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Product Detail</title>
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
<script src="js/imagezoom.js"></script>
</head>
<body>
<!--header-->
<?php
include('include/header.php');
?>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Product Detail</h2>
		</div>
	</div>
	<!-- grow -->
		<div class="product">
			<div class="container">
<?php
$qr=$con->query("SELECT * FROM `product` WHERE `p_id`='$_GET[id]'");
$pval=$qr->fetch_assoc();
?>

				<div class="product-price1">
				<div class="top-sing">
				<div class="col-md-7 single-top">	
						<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="admin/ibo_panel/production/images/<?php echo $pval[image1];?>">
			        <div class="thumb-image"> <img src="admin/ibo_panel/production/images/<?php echo $pval[image1];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="admin/ibo_panel/production/images/<?php echo $pval[image2];?>">
			         <div class="thumb-image"> <img src="admin/ibo_panel/production/images/<?php echo $pval[image2];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="admin/ibo_panel/production/images/<?php echo $pval[image3];?>">
			       <div class="thumb-image"> <img src="admin/ibo_panel/production/images/<?php echo $pval[image3];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
				 
			  </ul>
		</div>

	<div class="clearfix"> </div>
<!-- slide -->


						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	
	
	
	
	
	
					</div>	
					<div class="col-md-5 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php echo $pval['name'];?></h4>
							<div class="star-on">
								
								<!--<div class="review">-->
								<!--	<a href="#"> 1 customer review </a>-->
									
								<!--</div>-->
							<!--<div class="clearfix"> </div>-->
							</div>
							
							<h5 class="item_price"><?php echo "<del>₹".$pval['mrp']."</del>";?> <?php echo "₹".$pval[dp]?></h5>
							<p><?php echo $pval[short_description];?></p>
							
							<p><?php echo $pval[long_description];?></p>
						<!--	<div class="available">-->
						<!--		<ul>-->
						<!--			<li>Color-->
						<!--				<select>-->
						<!--				<option>Silver</option>-->
						<!--				<option>Black</option>-->
						<!--				<option>Dark Black</option>-->
						<!--				<option>Red</option>-->
						<!--			</select></li>-->
						<!--		<li class="size-in">Size<select>-->
						<!--			<option>Large</option>-->
						<!--			<option>Medium</option>-->
						<!--			<option>small</option>-->
						<!--			<option>Large</option>-->
						<!--			<option>small</option>-->
						<!--		</select></li>-->
						<!--		<div class="clearfix"> </div>-->
						<!--	</ul>-->
						<!--</div>-->
							
								<a href="process_add_to_cart.php?id=<?php echo $pval['p_id'];?>" class="add-cart item_add">ADD TO CART</a>
							
						</div>
					</div>
				<div class="clearfix"> </div>
				</div>
			<!---->

		<div class=" bottom-product">
		    <h2 style="padding:20px;"><center>Recently Added</center></h2>
					<div class=" bottom-product">
			<?php
			$qr=$con->query("SELECT * FROM `product` ORDER BY `p_id` DESC LIMIT 0,3");    
			while($val=$qr->fetch_assoc()){
			?>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem" style="height:300px;">
						<div class="product-at ">
							<a><img class="img-responsive" src="admin/ibo_panel/production/images/<?php echo $val[image1]?>" alt="" style="height:250px;">
							<div class="pro-grid">
							<a href="process_add_to_cart.php?id=<?php echo $val[p_id]?>"><span class="buy-in">Add To Cart</span></a>	<br><br>
							<a href="single.php?id=<?php echo $val[p_id]?>"><span class="buy-in">View Detail</span></a>	
							</div>
							
						</a>	
						</div>
						<br>
						<center><span><?php echo $val[name];?></span></center>
						<center><span><?php echo "<del>₹".$val[mrp]."</del>";?></span>&nbsp;&nbsp;<span><?php echo "₹".$val[dp];?></span></center>
						<!--<div class="ca-rt">-->
						<!--	<a href="#" class="item_add"><p class="number item_price"></p></a>						-->
						<!--</div>-->
						<div class="clearfix"></div>
					</div>
				
			<?php
			}
			?>
			
				</div>
			</div>
				<div class="clearfix"> </div><br><br><br>
				<center><a href="products.php" class="btn btn-primary"><span class="buy-in">View All</span></a></center>
</div>

	
		</div>
		</div>
<!--//content-->
<?php
include('include/footer.php');
?>
</body>
</html>
			<span cl</span></span>ass="buy-in">