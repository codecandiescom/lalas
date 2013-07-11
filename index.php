<?php $page = 'home'; include("sections/sections_head.php"); ?>

	<?php include 'sections/sections_masthead.php'; ?>
		
		<?php include 'sections/sections_homebanner.php'; ?>
		
		<?php include 'sections/sections_products.php'; ?>
		
		<section id="content_wrap">
			
			<div id="content_wrap_inner">
			
				<div class="cwi_col_left">
				
					<img src="assets/images/home_salon.jpg" alt="LaLa's salon chairs" class="welcome_image" />
					
					<h2>Welcome to LaLa's!</h2>
					
					<p>Our full service salon specializes in hair extensions and weaving. We also offer hair straightening, designer cuts and more! Unlike other hair extension salons, we strive to keep your natural hair healthy. We conveniently carry the products we work with to keep your hair salon quality at home!</p>
					
					<p>To view our full line of express services, click <a href="services.php">here <img src="assets/images/arrow-pink-right-small.png" alt="Pink Arrow" /></a></p>
					
				</div><!--/cwi_col_left-->
				
				<div class="cwi_col_right">
				
					<?php include 'sections/sections_hours.php'; ?>
					
					<?php include 'sections/sections_ads.php'; ?>
					
					<div id="twitter_feed" class="twocol_tan_box">
					
						<div id="twitter_feed_inner">
						
							<h3>Latest Updates from Twitter:</h3>
						
						</div>
						
						<a href="http://www.twitter.com/LaLasSalon">More from LaLa's on Twitter <img src="assets/images/arrow-pink-right-small.png" alt="Pink Arrow" /></a>
						
					</div><!--/twitter_feed-->
					
				</div><!--/cwi_col_right-->
				
			</div><!--/content_wrap_inner-->
			
		</section><!--/content_wrap-->
		
		<?php include 'sections/sections_map.php'; ?>
		
		<?php include 'sections/sections_foot.php'; ?>