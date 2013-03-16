<div class="tab-pane active" id="tab1">
						<p>统计：共有32条记录，共2页，这是第1页。</p>
						<table class="table table-striped table-condensed ">
							<thead>
								<tr>
									<td>id</td>
									<td>type</td>
									<td>brand</td>
									<td>title</td>
									<td>pic</td>
									<td>管理</td>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($products as $product) {
									$tid=$product->tid;
									$ptype=Ptype::model()->findByPk($tid);
									$bid=$product->bid;
									$brand=Brand::model()->findByPk($bid);
									$pid=$product->pid;
									$url=$this->createUrl('/product/view',array('pid'=>$pid));
									$delete_url=$this->createUrl('/admin/product/delete',array('pid'=>$pid));
									$update_url=$this->createUrl('/admin/product/update',array('pid'=>$pid));
									echo <<<EOD
										<tr>
											<td>$pid</td>
											<td>$ptype[ttitle]</td>
											<td>$brand[btitle]</td>
											<td><a href="$url">$product[ptitle]</a></td>
											<td>$product[pimg]</td>
											<td> 
											<a href="$delete_url">删除</a></a> 
												<span class="divider">/</span> 
												<a href="$update_url">修改</a> 
											</td>
										</tr>
EOD;
								}
								?>
								
							</tbody>
						</table>
						<!-- <div class="pagination ">
							<ul>
								<li><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div> -->
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
