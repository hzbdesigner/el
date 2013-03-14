<div class="tab-pane active" id="tab1">
						<p>统计：共有32条记录，共2页，这是第1页。</p>
						<table class="table table-striped table-condensed ">
							<thead>
								<tr>
									<td>id</td>
									<td>type</td>
									<td>title</td>
									<td>content</td>
									<td>des</td>
									<td>pic</td>
									<td>管理</td>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($activitys as $activity) {
									$tid=$activity->tid;
									$atype=Atype::model()->findByPk($tid);
									$aid=$activity->aid;
									$url=$this->createUrl('/activity/view',array('aid'=>$aid));
									$delete_url=$this->createUrl('/admin/activity/delete',array('aid'=>$aid));
									$update_url=$this->createUrl('/admin/activity/update',array('aid'=>$aid));
									echo <<<EOD
										<tr>
											<td>$aid</td>
											<td>$atype[ttitle]</td>
											<td><a href="$url">$activity[atitle]</a></td>
											<td>内容，内容内容，内容内容，内容</td>
											<td>des</td>
											<td>$activity[apic]</td>
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
