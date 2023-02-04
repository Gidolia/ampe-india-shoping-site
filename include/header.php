<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
				</ul>
			</div>
			<div class="header-left">
			
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="products.php" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search"  id="search" name="searchpro">
							<input class="sb-search-submit" type="submit" value="" name="btn_search">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
			
<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

				<div class="ca-r">
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							
							<a href="checkout.php"><img src="images/cart.png" alt=""/></a></h3>
						</a>
						<!--<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>-->

					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
				
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h2><a href="index.php">Ampe-India</a></h2>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color8" href="index.php">HOME</a></li>	
				      <li><a class="color1" href="#">CATEGORY</a>
				      	<div class="mepanel">
						    <div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
							<?php
							$rr=$con->query("SELECT * FROM `category`");
							while($cat=$rr->fetch_assoc()){
							?>
							<li><a href="products.php?id=<?php echo $cat[cat_id]?>"><?php echo $cat['cat_name']?></a></li>
						    <?php
						    }
						    ?>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<img src="images/ii.jpg">
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<img src="images/1j.jpeg">
								</div>							
							</div>
							<!--<div class="col1">-->
							<!--	<div class="h_nav">-->
							<!--		<ul>-->
							<!--			<li><a href="products.html">Bedskirt</a></li>-->
							<!--			<li><a href="products.html">Blanket/Throw</a></li>-->
							<!--			<li><a href="products.html">Collection/Duvet</a></li>-->
							<!--			<li><a href="products.html">Comforter</a></li>-->
							<!--			<li><a href="products.html">Comforter Set</a></li>-->
							<!--			<li><a href="products.html">Decorative Pillow</a></li>-->
							<!--			<li><a href="products.html">Mattress Pad </a></li>-->
							<!--			<li><a href="products.html">Mattress Topper</a></li>-->
							<!--			<li><a href="products.html">Pillow</a></li>-->
							<!--			<li><a href="products.html">Pillow Protector</a></li>-->
							<!--		</ul>	-->
							<!--	</div>												-->
							<!--</div>-->
						    </div>
						</div>
					</li>
				  <!--  <li class="grid"><a class="color2" href="#">BEDSPREADS</a>-->
					 <!-- 	<div class="mepanel">-->
						<!--<div class="row">-->
						<!--	<div class="col1">-->
						<!--		<div class="h_nav">-->
						<!--			<ul>-->
						<!--				<li><a href="products.html">Bedskirt</a></li>-->
						<!--				<li><a href="products.html">Blanket/Throw</a></li>-->
						<!--				<li><a href="products.html">Collection/Duvet</a></li>-->
						<!--				<li><a href="products.html">Comforter</a></li>-->
						<!--				<li><a href="products.html">Comforter Set</a></li>-->
						<!--				<li><a href="products.html">Decorative Pillow</a></li>-->
						<!--				<li><a href="products.html">Mattress Pad </a></li>-->
						<!--				<li><a href="products.html">Mattress Topper</a></li>-->
						<!--				<li><a href="products.html">Pillow</a></li>-->
						<!--				<li><a href="products.html">Pillow Protector</a></li>-->
										
						<!--			</ul>	-->
						<!--		</div>								-->
						<!--	</div>-->
						<!--	<div class="col1">-->
						<!--		<div class="h_nav">-->
						<!--			<ul>-->
						<!--				<li><a href="products.html">Alpaca</a></li>-->
						<!--				<li><a href="products.html">Cashmere</a></li>-->
						<!--				<li><a href="products.html">Cotton</a></li>-->
						<!--				<li><a href="products.html">Cotton Blend</a></li>-->
						<!--				<li><a href="products.html">Down</a></li>-->
						<!--				<li><a href="products.html">Down Alternative</a></li>-->
						<!--				<li><a href="products.html">Egyptian Cotton</a></li>-->
						<!--				<li><a href="products.html">Modal</a></li>-->
						<!--				<li><a href="products.html">Pima Cotton</a></li>-->
						<!--				<li><a href="products.html">Silk </a></li>-->
										
						<!--			</ul>		-->
						<!--		</div>							-->
						<!--	</div>-->
						<!--	<div class="col1">-->
						<!--		<div class="h_nav">-->
									
						<!--			<ul>-->
						<!--				<li><a href="products.html">Bedskirt</a></li>-->
						<!--				<li><a href="products.html">Blanket/Throw</a></li>-->
						<!--				<li><a href="products.html">Collection/Duvet</a></li>-->
						<!--				<li><a href="products.html">Comforter</a></li>-->
						<!--				<li><a href="products.html">Comforter Set</a></li>-->
						<!--				<li><a href="products.html">Decorative Pillow</a></li>-->
						<!--				<li><a href="products.html">Mattress Pad </a></li>-->
						<!--				<li><a href="products.html">Mattress Topper</a></li>-->
						<!--				<li><a href="products.html">Pillow</a></li>-->
						<!--				<li><a href="products.html">Pillow Protector</a></li>-->
						<!--			</ul>	-->
						<!--		</div>												-->
						<!--	</div>-->
						<!--  </div>-->
						<!--</div>-->
			   <!-- </li>-->
				    <li><a class="color4" href="products.php">EXPLORE PRODUCTS</a></li>				
				<li><a class="color6" href="contact.php">GET IN TOUCH</a></li>
				<?php
                    if(isset($_SESSION[id]) AND $_SESSION[id]!=""){
                    ?>
                        <li><a href="profile.php" >PROFILE</a></li>
                    <?php
                    }else{
                    ?>
                    <li><a href="login.php" >LOGIN / REGISTER</a> </li>
                    
                    <?php
                    }
                    ?>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>