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



		<div class="container" id="msg-detail-list">
			<div class="msg-detail" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
				<img src="<?=base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">听说张之铖今天又找妹纸了？！！</div>
				</div>
				<div class="msg-time">晚上18:08</div>
				<div class="msg-nm"></div>
			</div>
			<div class="msg-detail">
				<img src="<?=base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">听说张之铖今天又找妹纸了？！！</div>
				</div>
				<div class="msg-time">晚上18:08</div>
			</div>
			<div class="msg-detail">
				<img src="<?=base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">听说张之铖今天又找妹纸了？！！</div>
				</div>
				<div class="msg-time">晚上18:08</div>
			</div>
			<div class="msg-detail">
				<img src="<?=base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">听说张之铖今天又找妹纸了？！！</div>
				</div>
				<div class="msg-time">晚上18:08</div>
			</div>
			<div class="msg-detail">
				<img src="<?=base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">听说张之铖今天又找妹纸了？！！</div>
				</div>
				<div class="msg-time">晚上18:08</div>
			</div>
			<div class="msg-detail">
				<img src="<?=base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">听说张之铖今天又找妹纸了？！！</div>
				</div>
				<div class="msg-time">晚上18:08</div>
			</div>
		</div>


<!-- Modal -->
<div class="modal fade" id="msg_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="msg_reply_img" src="<?=base_url('image/photo_default.gif')?>">
        <span>王永强</span>
        <span class='msg_reply_time'>04:35am</span>
      </div>
      <div class="modal-body">
      	<p>听说张之铖又找妹纸了？！！</p>
        <form>
          <div class="form-group">
            <label for="message-text" class="control-label">回复</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary">确认发送</button>
      </div>
    </div>
  </div>
</div>