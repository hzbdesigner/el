

	<div class="page-wrapper">
		<div class="nav-placeholder top"></div>
		<div class="container">
			<div class="title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/product-title.png" /></div>
			<div class="filter">
				<dl>
					<dt>品牌</dt>

					<dd class='<?php if($bid==0){echo 'active';} ?>'><a href='<?php echo $this->createUrl('index',array('bid'=>0,'tid'=>$tid)) ; ?>'>全部</a></dd>
					<?php
						
						foreach($brands as $brand){
							$brandid=$brand->bid;
							$btitle=$brand->btitle;
							$active='';
							if($brandid==$bid){
								$active="active";
							}
							$url=$this->createUrl('index',array('bid'=>$brandid,'tid'=>$tid));
						echo <<<EOD
							<dd class='$active'><a href="$url">$btitle</a></dd>
EOD;
					}
					?>
				</dl>
				<dl>
					<dt>分类</dt>
					<dd class='<?php if($tid==0){echo 'active';} ?>'><a href='<?php echo $this->createUrl('index',array('bid'=>$bid,'tid'=>0)) ; ?>'>全部</a></dd>
					<?php
						
						foreach($ptypes as $ptype){
							$ptypeid=$ptype->tid;
							$ttitle=$ptype->ttitle;
							$active='';
							if($ptypeid==$tid){
								$active="active";
							}
							$url=$this->createUrl('index',array('bid'=>$bid,'tid'=>$ptypeid));
						echo <<<EOD
							<dd class='$active'><a href="$url">$ttitle</a></dd>
EOD;
					}
					?>
					
				</dl>
			</div>
			<div class="lists">
				<ul id="da-thumbs" class="da-thumbs">
					<?php
						foreach($products as $product){
							$img=$product->pimg;
							$title=$product->ptitle;
							$pid=$product->pid;
							$viewurl=$this->createUrl('view',array('pid'=>$pid,'bid'=$bid,'tid'=$tid));
						echo <<<EOD
							<li>
								<a href='$viewurl'>
									<img src='$img' />
									<div><span>$title</span></div>
								</a>
							</li>
EOD;
					}
					?>
					
				</ul>
				<!-- <ul class="pagination">
					<li class="prev"><a href="#">上一页</a></li>
					<li ><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li class="next"><a href="#">下一页</a></li>
				</ul> -->
				<?php  $this->widget('CLinkPager',array(
							'pages'=>$pages,
							'firstPageLabel' => '首页',
							'lastPageLabel' => '末页',
							'nextPageLabel' => '下一页',
							'prevPageLabel' => '上一页',
							'header' => '',
							'footer' => '',
							)); 
				?>
				
			</div>
		</div>
		<div class="nav-placeholder bottom"></div>
	</div>

