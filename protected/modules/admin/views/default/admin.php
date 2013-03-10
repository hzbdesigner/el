
	<div class="container">
		<div class="row tabbable tabs-left">
			
				<ul class=" span2 nav nav-tabs">
					<li class="active"> <a href="#tab1" data-toggle="tab">产品管理</a> </li>
					<li class=""> <a href="#tab2"  data-toggle="tab">添加产品</a> </li> 
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<p>统计：共有32条记录，第1页，共2页。</p>
						<table class="table table-striped table-condensed ">
							<thead>
								<tr>
									<td>id</td>
									<td>title</td>
									<td>des</td>
									<td>content</td>
									<td>其他属性</td>
									<td>管理</td>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Charis Brown</td>
									<td>名牌家居，意大利</td>
									<td>内容，内容内容，内容内容，内容</td>
									<td>属性</td>
									<td> <a href="#">删除</a></a> <span class="divider">/</span> <a href="#">修改</a> </td>
								</tr>
								<tr>
									<td>1</td>
									<td>Charis Brown</td>
									<td>名牌家居，意大利</td>
									<td>内容，内容内容，内容内容，内容</td>
									<td>属性</td>
									<td> <a href="#">删除</a></a> <span class="divider">/</span> <a href="#">修改</a> </td>
								</tr>
								<tr>
									<td>1</td>
									<td>Charis Brown</td>
									<td>名牌家居，意大利</td>
									<td>内容，内容内容，内容内容，内容</td>
									<td>属性</td>
									<td> <a href="#">删除</a></a> <span class="divider">/</span> <a href="#">修改</a> </td>
								</tr>
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
					<div class="tab-pane " id="tab2">
						<form class="form-horizontal">
							<fieldset>
								<legend>新建产品</legend>
								<div class="control-group">
									<label class="control-label">标题</label>
									<div class="controls">
										<input class="span6" type="text" placeholder="输入产品名称"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">类型</label>
									<div class="controls">
										<label class="radio inline">
											<input type="radio" name="type" id="1"  />
											<span >卧室</span>
										</label>
										<label class="radio inline">
											<input type="radio" name="type" id="2"  />
											<span >厨房</span>
										</label>
										<label class="radio inline">
											<input type="radio" name="type" id="3"  />
											<span >全部</span>
										</label>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">品牌</label>
									<div class="controls">
										<label class="radio inline">
											<input type="radio" name="type" id="1"  />
											brand1
										</label>
										<label class="radio inline">
											<input type="radio" name="type" id="2"  />
											brand2
										</label>
										<label class="radio inline">
											<input type="radio" name="type" id="3"  />
											brand3
										</label>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">描述</label>
									<div class="controls">
										<textarea rows="3" class="span5"></textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">图片</label>
									<div class="controls">
										<input type="file" name="pic" />
									</div>
								</div>
								<div class="control-group action">
									<button class="btn btn-primary">保存</button>
									<button class="btn ">取消</button>
								</div>


							</fieldset>
							
						</form>
					</div>
				</div>
		</div>
	</div>
