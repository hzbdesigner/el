
	<div class="page-wrapper">
		<div class="nav-placeholder top"></div>
		<div class="title"><img src="<?php echo Yii::app()->baseUrl ; ?>/images/product-title.png" /></div>
		<a class="back-to-lists" href="products.html"><<返回列表</a>
		<section id="ps-container" class="ps-container">
			
			<div class="ps-contentwrapper">
				
				<div class="ps-content">
					<h2><?php echo $theproduct[ptitle] ;?></h2>
					<span class="ps-price">100</span>
					<p><?php echo $theproduct[pdes] ;?></p>
					<!-- <a href="#">购买</a> -->
				</div>
				<?php 
					foreach ($products as $product) {
						
						echo <<<EOD
						<div class="ps-content">
							<h2>$product[ptitle]</h2>
							<span class="ps-price">£65</span>
							<p>$product[pdes]</p>
							<!-- <a href="#">购买</a> -->
						</div>
EOD;
					}
				?>
				
				
				
			</div><!-- /ps-contentwrapper -->
			
			<div class="ps-slidewrapper">
			
				<div class="ps-slides">
					<div ><img src='<?php echo $theproduct[pimg] ; ?>' style='width:100%;height:100%;' /></div>
					<?php 
					foreach($products as $product){
						$imgurl=$product[pimg];
						echo <<<EOD
						<div ><img src='$imgurl' style='width:100%;height:100%;' /></div>

EOD;
					}
					?>

				</div>
				
				<nav>
					<a href="#" class="ps-prev" ></a>
					<a href="#" class="ps-next" ></a>
				</nav>
				
			</div><!-- /ps-slidewrapper -->
			
		</section><!-- /ps-container -->
		<div class="nav-placeholder top"></div>
	</div>

