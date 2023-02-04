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
<title>Ampe-India || Home</title>
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
	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
		<!--	<div  id="top" class="callbacks_container">-->
		<!--	<ul class="rslides" id="slider">-->
		<!--	    <li>-->
					
		<!--				<div class="banner-text">-->
		<!--					<h3>Lorem Ipsum is   </h3>-->
		<!--				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>-->
						
		<!--				</div>-->
				
		<!--		</li>-->
		<!--		<li>-->
					
		<!--				<div class="banner-text">-->
		<!--					<h3>There are many  </h3>-->
		<!--				<p>Popular belief Contrary to , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>-->
												

		<!--				</div>-->
					
		<!--		</li>-->
		<!--		<li>-->
		<!--				<div class="banner-text">-->
		<!--					<h3>Sed ut perspiciatis</h3>-->
		<!--				<p>Lorem Ipsum is not simply random text. Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC.</p>-->
								

		<!--				</div>-->
					
		<!--		</li>-->
		<!--	</ul>-->
		<!--</div>-->

	</div>
	</div>

<!--content-->
<div class="container">
	<div class="cont">
		<div class="content">
			<div class="content-top-bottom">
				<h2>FEATURED CATEGORY</h2>
<?php
$qr=$con->query("SELECT * FROM `category` LIMIT 0,1");
while($v=$qr->fetch_assoc()){
?>
				<div class="col-md-6 men">
					<a href="products.php?id=<?php echo $v['cat_id'];?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="admin/ibo_panel/production/images/<?php echo $v[cat_image]?>" alt="" style="height:420px;width:100%;">
						<div class="b-wrapper">
						<h3 class="b-animate b-from-top top-in   b-delay03 ">
						<span><?php echo $v[cat_name]?></span>	
						</h3>
						</div>
					</a>
				</div>
<?php
}
?>
				<div class="col-md-6">
<?php
$qr=$con->query("SELECT * FROM `category` LIMIT 1,1");
while($v=$qr->fetch_assoc()){
?>				    
					<div class="col-md1 ">
						<a href="products.php?id=<?php echo $v['cat_id'];?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="admin/ibo_panel/production/images/<?php echo $v[cat_image]?>" alt="" style="height:205px;width:100%;">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in1   b-delay03 ">
								<span><?php echo $v[cat_name]?></span>	
								</h3>
							</div>
						</a>
						
					</div>
<?php
}
?>					
					<div class="col-md2">
<?php
$qr=$con->query("SELECT * FROM `category` LIMIT 2,2");
while($v=$qr->fetch_assoc()){
?>
						<div class="col-md-6 men1">
							<a href="products.php?id=<?php echo $v['cat_id'];?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="admin/ibo_panel/production/images/<?php echo $v[cat_image]?>" alt="" style="height:185px;width:100%;">
								<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
								<span><?php echo $v[cat_name]?></span>	
								</h3>
								</div>
							</a>
							
						</div>
<?php
}
?>						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top">
				<h1>NEW PRODUCTS</h1>
				<div class="grid-in">
<?php
$qr=$con->query("SELECT * FROM `product`");
while($v=$qr->fetch_assoc()){
?>
				<div class="col-md-3 grid-top simpleCart_shelfItem">
						<a href="single.php?id=<?php echo $v[p_id]?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="admin/ibo_panel/production/images/<?php echo $v[image1]?>" alt="" style="height:200px;">
							<!--<div class="b-wrapper">-->
							<!--	<h3 class="b-animate b-from-left    b-delay03 ">-->
							<!--		<span>-->
							<!--		<?php #echo $v[name]?>-->
							<!--		</span>-->
									
							<!--	</h3>-->
							<!--</div>-->
						</a>
				

					<p><a href="single.php?id=<?php echo $v[p_id]?>"><?php echo $v[name]?></a></p>
					<a href="process_add_to_cart.php?id=<?php echo $v[p_id]?>" class="item_add"><p class="number item_price"><i> </i><?php echo "<del>₹".$v[mrp]."</del>"?> <?php echo "₹".$v[dp]?></p></a>
					</div>
<?php
}
?>
					
				</div>
			</div>
			
		</div>
	<!----->
	</div>
	<!---->
</div>
<?php
include('include/footer.php');
?>
</body>
</html>
			