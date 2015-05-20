<div id="login_form">
	<h1>登录</h1>
	<?php
		echo form_open('login/validate_credentials');
		echo form_input('email', '邮箱');
		echo form_password('password', '******');
		echo form_submit('submit', '进入寻趣');
		echo anchor('login/signup', '有账号，点击注册');
		

	?>
</div>
