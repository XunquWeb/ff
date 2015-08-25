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
		<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('css/personal_info.css')?>" rel="stylesheet">
	</head>
	<div class="info_topbox">
		<div class="info_photo">
			<img src="http://p.qsc.dreamore.cn/Uploads/Avatar//20150603/01d9e29a.gif">
		</div>
		<div class="info_name">
			<h4>哈利波特昊</h4>
			<h3>um...this guy is somehow a bit handsome~~</h3>
		</div>
		<a class="info_edit_btn" href="<?php echo base_url('user/myinfo_edit')?>"><img src="http://f.qsc.dreamore.cn/public_html/refactbuild/image/user_edit.png"></a>
		<a class="info_back" href="<?php echo $this->session->userdata('backurl');?>"><img src="<?php echo base_url('image/left_icon.png')?>"></span></a>
		<div class="info_view">
			<span href="#"><span>9</span><span>关注 </span></span>
			<span style="margin-left:5px;margin-right:5px">|</span>
			<span href="#"><span> 124</span><span>浏览</span></span>
		</div>
	</div>

	<div class="info_container">
		<div class="latest_view">
			<span>最近来访</span>
			<span id="view_breakup"></span>
			<div class="latest_view_detail">
				<img src="http://p.qsc.dreamore.cn/Uploads/Avatar//20150603/01d9e29a.gif">
				<img src="http://p.qsc.dreamore.cn/Uploads/Avatar//20150603/01d9e29a.gif">
				<img src="http://p.qsc.dreamore.cn/Uploads/Avatar//20150603/01d9e29a.gif">
				<img src="http://p.qsc.dreamore.cn/Uploads/Avatar//20150603/01d9e29a.gif">
			</div>
			<span></span>	
		</div>
		<div class="info_detail">
			<div class="info_verify">
				<h6>认证信息</h6>
				<div class="info_ver_detail">
				</div>	
			</div>
			<div class="info_basic">
				<h6>基本信息</h6>
				<div class="info_basic_detail">
					<ul>
						<li><span class="info_detail_a">学校</span><span class="info_detail_b">上海交通大学</span><li>
						<li><span class="info_detail_a">院系</span><span class="info_detail_b">电子信息</span><li>
						<li><span class="info_detail_a">入学年份</span><span class="info_detail_b">2013年</span><li>
					</ul>
				</div>	
			</div>
			<div class="info_more">
				<h6>MORE</h6>
				<div class="info_more_detail">
					<ul>
						<li><span class="info_detail_a">出生日期</span><span class="info_detail_b">1896年</span><li>
						<li><span class="info_detail_a">星座</span><span class="info_detail_b">射手座</span><li>
						<li><span class="info_detail_a">家乡</span><span class="info_detail_b">哈哈哈，交大附中</span><li>
						<li><span class="info_detail_a">情感状态</span><span class="info_detail_b">我有很多男朋友～</span><li>
					</ul>
				</div>	
			</div>
		</div>
	</div>



</html>