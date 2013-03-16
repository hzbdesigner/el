<div class="tab-pane active" id="tab1">
						<p>统计：共有32条记录，共2页，这是第1页。</p>
						<table class="table table-striped table-condensed ">
							<thead>
								<tr>
									<td>id</td>
									<td>title</td>
									<td>管理</td>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($brands as $brand) {
									$bid=$brand->bid;
									// $url=$this->createUrl('/brand/view',array('bid'=>$bid));
									$delete_url=$this->createUrl('/admin/brand/delete',array('bid'=>$bid));
									$update_url=$this->createUrl('/admin/brand/update',array('bid'=>$bid));
									echo <<<EOD
										<tr>
											<td>$bid</td>
											<td><a href="#">$brand[btitle]</a></td>
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
						
					</div>
