<fieldset>
	<legend>创建用户</legend>
	<?php

	echo form_open('login/create_user');
	echo form_input('username', set_value('username', '姓名'));
	echo form_input('stu_num', set_value('stu_num', '学号'));
	echo form_input('email', set_value('email', '邮箱'));
	echo form_password('password', '******');
	echo form_password('password2', '******');
	echo form_submit('submit', '加入寻趣');
	
	?>

</fieldset>
