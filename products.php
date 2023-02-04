<?php
session_start();
if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
    include('config.php');
}else{
    include('database_connect.php'); 
}

if(isset($_POST['btn_search'])){
    
    $srch=$_POST['searchpro'];
    $qr=$con->query("SELECT * FROM `product` WHERE `name` LIKE '%$srch%' OR `cat_name`='%$srch%' ");

}elseif($_GET[id]!="" ){
    
    $qr=$con->query("SELECT * FROM `product` WHERE `cat_id`='$_GET[id]' ");    

}else{
    
    $qr=$con->query("SELECT * FROM `product`");    

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
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
<!-- products -->
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Products</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="pro-du">
		<div class="container">
			<div class="col-md-12 product1">
				<div class=" bottom-product">
			<?php
			$nn=$qr->num_rows;
			if($nn>0){
			while($val=$qr->fetch_assoc()){
			?>
					<div class="col-md-3 bottom-cd simpleCart_shelfItem" style="height:300px;">
						<div class="product-at ">
							<a><img class="img-responsive" src="admin/ibo_panel/production/images/<?php echo $val[image1]?>" alt="" style="height:250px;">
							<div class="pro-grid">
							<a href="process_add_to_cart.php?id=<?php echo $val[p_id]?>"><span class="buy-in">Add To Cart</span></a>	<br><br>
							<a href="single.php?id=<?php echo $val[p_id]?>"><span class="buy-in">View Detail</span></a>	
							</div>
							
						</a>	
						</div>
						
						<center><span><?php echo $val[name];?></span></center>
						<center><span><?php echo "<del>₹".$val[mrp]."</del>";?></span>&nbsp;&nbsp;<span><?php echo "₹".$val[dp];?></span></center>
						<!--<div class="ca-rt">-->
						<!--	<a href="#" class="item_add"><p class="number item_price"></p></a>						-->
						<!--</div>-->
						<div class="clearfix"></div>
					</div>
			<?php
			}
			}else{
			?>
	                <div >
<center><img  src="images/nofound.gif" height="200px" width="200px"></center>
<center><h3>Property for your Search</h3></center>

<center><a href="index.php" style="font-size:20px;"><<< Go to Home Page</a></center>
</div>

	        <?php
			}
	        ?>
				</div>
	
				<div class="clearfix"></div>
		</div>
	</div>
<!-- products -->
<?php
include('include/footer.php');
?>
</body>
</html>
			