<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	    <title>Bootstrap 101 Template</title>
		<link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('css/message_line_top.css')?>" rel="stylesheet">
		
		<!--
		<link href="<?=base_url('css/personal_info_edit.css')?>" rel="stylesheet">
		<link href="<?=base_url('css/personal_info.css')?>" rel="stylesheet">
		-->
	</head>
	    <!-- 
<div class="info_edit_topbox">
	<div class="info_edit_title">
		<h4>
			<?php
				if($type==1) echo"用户私信";
				else echo"系统消息";
			?>
		</h4>
	</div>
	<a class="info_back" href="<?=base_url('user/message/0')?>"><img src="http://localhost:8888/xunqu/ff/image/left_icon.png"></a>
</div>
		-->

<nav class="msg-top-bar">
	<a href="#" class="active">
	<span>用户私信</span>
	</a>
	<a href="#">
	<span>系统消息</span>
	</a>
</nav>

<script>
	$('.msg-top-bar a').bind('click', function(){
			$('.msg-top-bar a').each(
				function(){
					if($(this).hasClass('active'))
					{
						$(this).removeClass('active');
					}
					else
					{
						$(this).addClass('active');
					}
				}
			)
		}
	);
</script>