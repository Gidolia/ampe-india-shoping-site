<div class="footer w3layouts" style="margin-top:100px;">
				<div class="container">
			<div class="footer-top-at w3">
			
				<div class="col-md-3 amet-sed w3l">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Explore Products</a></li>
						<li><a href="order.php">Order History</a></li>
						<?php
						if($_SESSION[id]!=""){
						?>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="logout.php">Signout</a></li>
						
						<?php
						}else{
						?>
						<li><a href="login.php">Login/Register</a></li>	
						<?php
						}
						?>
					</ul>	
				</div>
				<div class="col-md-3 amet-sed w3ls">
					<h4>CATEGORIES</h4>
					<ul class="nav-bottom">
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
			<!--	<div class="col-md-3 amet-sed agileits">-->
			<!--		<h4>NEWSLETTER</h4>-->
			<!--		<div class="stay agileinfo">-->
			<!--			<div class="stay-left wthree">-->
			<!--				<form action="#" method="post">-->
			<!--					<input type="text" placeholder="Enter your email " required="">-->
			<!--				</form>-->
			<!--			</div>-->
			<!--			<div class="btn-1 w3-agileits">-->
			<!--				<form action="#" method="post">-->
			<!--					<input type="submit" value="Subscribe">-->
			<!--				</form>-->
			<!--			</div>-->
			<!--				<div class="clearfix"> </div>-->
			<!--</div>-->
					
			<!--	</div>-->
				<div class="col-md-6 amet-sed agileits-w3layouts">
				<h4>CONTACT US</h4>
					<p>Gwalior,</p>
					<p>Madhya Pradesh</p>
					<p>office :  +91-XXXX-XXXX-XX</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class w3-agile">
		<p>© 2023 Ampe-India. All Rights Reserved | Design by  <a href="http://eibo.in/" target="_blank">EIBO SERVICES PVT. LTD.</a> </p>
		</div>
		</div>