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
		<link href="<?php echo base_url('css/message.css')?>" rel="stylesheet">
	</head>

<div id="#tettet">
</div>

<!--
		<div class="container" id="msg-detail-list">
			<div class="msg-detail" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">今晚约写代码吗？</div>
				</div>
				<div class="msg-time">晚上18:08</div>
				<div class="msg-nm"></div>
			</div>
			<div class="msg-detail">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">苏小欢</div>
					<div class="msg-text">分享了一个约单</div>
				</div>
				<div class="msg-time">下午14:08</div>
			</div>
			<div class="msg-detail">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">秦小浩</div>
					<div class="msg-text">哈哈哈 踢球嘛？</div>
				</div>
				<div class="msg-time">早上10:12</div>
			</div>
			<div class="msg-detail">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">萌妹纸</div>
					<div class="msg-text">晚安～</div>
				</div>
				<div class="msg-time">昨天22:46</div>
			</div>
			<div class="msg-detail">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">张小铖</div>
					<div class="msg-text">好吧好吧 晚点聊，我先出去了</div>
				</div>
				<div class="msg-time">昨天16:09</div>
			</div>
			<div class="msg-detail">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">董小良</div>
					<div class="msg-text">分享了一个约单</div>
				</div>
				<div class="msg-time">昨天10:08</div>
			</div>
		</div>
-->
<div class="container" id="msg-detail-list">
	<?php 
		$char = '"';
		//var_dump($utu_msg);
		if($msg_type[0] == 1)
			foreach($utu_msg as $r){
				echo'<div class="msg-detail">';
					echo"<img src=".$char.base_url('image/photo_default.gif').$char.'>';
					echo'<div class="msg-detail-content">';
						echo'<div class="msg-source">'.$r['from_nname'].'</div>';
						echo'<div class="msg-text">'.$r['m_content'].'</div>';
					echo '</div>';
					echo '<div class="msg-time">'."昨天2246".'</div>';
				echo'</div>';
			}
		else{
			foreach($utu_msg as $r){
				echo'<div class="msg-detail">';
					echo"<img src=".$char.base_url('image/photo_default.gif').$char.'>';
					echo'<div class="msg-detail-content">';
						echo'<div class="msg-source">'.$r['from_nname'].'</div>';
						echo'<div class="msg-text">'.$r['m_content'].'</div>';
					echo '</div>';
					echo '<div class="msg-time">'."昨天2".'</div>';
				echo'</div>';
			}
		}

	?>
</div>

<!-- Modal 
<div class="modal fade" id="msg_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="msg_reply_img" src="<?php echo base_url('image/photo_default.gif')?>">
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
-->