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
		<link href="<?=base_url('css/message.css')?>" rel="stylesheet">
	</head>
	<div class="msg-list">
		<div class="container">
			<a href="<?=base_url('user/message/1')?>" class="go_url msg-item comment-item">
				<span class="msg-icon iconfont msg-icon-red">
					<b class="prompt" id="pro_msg"></b>
					<span class="glyphicon glyphicon-comment"></span>
				</span>
				<div class="contents">
					<h5>用户私信</h5>
				</div>
				<i class="glyphicon glyphicon-chevron-right arrow-right"></i>
			</a>
			<a href="<?=base_url('user/message/2')?>" class="go_url msg-item comment-item">
				<span class="msg-icon iconfont msg-icon-blue">
					<b class="prompt" id="J_cmt_msg" style="display:none;"></b>
					<span class="glyphicon glyphicon-edit"></span>
					
				</span>
				<div class="contents">
					<h5>系统消息</h5>
				</div>
				<i class="glyphicon glyphicon-chevron-right arrow-right"></i>
			</a>
		</div>
		<div class="line"><i class="glyphicon glyphicon-envelope"></i>消息列表</div>
	</div>