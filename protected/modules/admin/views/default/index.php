

	<div class="container login">
		<form class="bs-docs-example form-horizontal" action='<?php echo $this->createUrl('/admin/default/login') ?>' method='post'>
			<fieldset>
				<legend>管理员登录</legend>
				<div class="control-group">
					<span>用户名</span>
					<input type="text"   placeholder="输入用户名" name='LoginForm[email]'/>
				</div>
				<div class="control-group">
					<span>密&nbsp;&nbsp;&nbsp;码</span>
					<input type="password"   placeholder="输入密码" name='LoginForm[password]'/>
				</div>
				<div class="control-group">
					<button class="btn" >登&nbsp;&nbsp;录</button>
					<label><input type="checkbox" name='LoginForm[rememberMe]'>记住我</label>
				</div>

			</fieldset>
		</form>
	</div>
