
	<div class="page-wrapper">
		<div class="nav-placeholder top"></div>
		<div class="title"><img src="<?php echo Yii::app()->baseUrl ; ?>/images/product-title.png" /></div>
		<a class="back-to-lists" href="<?php echo $this->createUrl('index',array('bid'=>0,'tid'=>0)) ; ?>"><<返回列表</a>
		<div id="ps-container" class="ps-container">
			
			<div class="ps-contentwrapper">
				
				<div class="ps-content">
					<h2><?php echo $theproduct->ptitle;?></h2>
					<span class="ps-price">100</span>
					<p><?php echo $theproduct->pdes;?></p>
					<!-- <a href="#">购买</a> -->
				</div>
				<?php 
					foreach ($products as $product) {
						$ptitle=$product->ptitle;
						$pdes=$product->pdes;
						echo <<<EOD
						<div class="ps-content">
							<h2>$ptitle</h2>
							<span class="ps-price">£65</span>
							<p>$pdes</p>
							<!-- <a href="#">购买</a> -->
						</div>
EOD;
					}
				?>
				
				
				
			</div><!-- /ps-contentwrapper -->
			
			<div class="ps-slidewrapper">
			
				<div class="ps-slides">
					
					<div style="background-color:#ddd;border:1px solid #ccc;background-image:url(<?php echo $theproduct->pimg ; ?>);background-size:auto 100%;"></div>
					<?php 
					foreach($products as $product){
						$imgurl=$product->pimg;
						echo <<<EOD
						<div style="background-color:#ddd;border:1px solid #ccc;background-image:url($imgurl);background-size:atuo 100%;"></div>
						

EOD;
					}
					?>

				</div>
				
				<nav>
					<a href="#" class="ps-prev" ></a>
					<a href="#" class="ps-next" ></a>
				</nav>
				
			</div><!-- /ps-slidewrapper -->
			
		</div><!-- /ps-container -->
		<div class="nav-placeholder top"></div>
	</div>

