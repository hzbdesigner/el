<div class="tab-pane active" id="tab1">
						<p>统计：共有32条记录，第1页，共2页。尼玛。逼我修改一下，乱码你没啊</p>
						<table class="table table-striped table-condensed ">
							<thead>
								<tr>
									<td>id</td>
									<td>type</td>
									<td>title</td>
									<td>content</td>
									
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
									$delete_url=$this->createUrl('/activity/delete',array('aid'=>$aid));
									echo <<<EOD
										<tr>
											<td>$aid</td>
											<td>$atype[ttitle]</td>
											<td><a href="$url">$activity[atitle]</a></td>
											<td>内容，内容内容，内容内容，内容</td>
											<td> 
											<a href="">删除</a></a> 
												<span class="divider">/</span> 
												<a href="#">修改</a> 
											</td>
										</tr>
EOD;
								}
								?>
								
							</tbody>
						</table>
						<div class="pagination ">
							<ul>
								<li><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
