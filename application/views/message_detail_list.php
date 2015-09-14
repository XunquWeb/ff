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
		{
			if ($empty == false){
				foreach($utu_msg as $r){
					$d=strtotime($r['m_time']);
					echo'<div class="msg-detail">';
						echo "<a href=".base_url('user/myinfo/').'/'.$r['from_u_id']." >";
						echo"<img src=".$char.base_url('image/photo_default.gif').$char.'>';
						echo'</a>';
						echo'<div class="msg-detail-content">';
							echo'<div class="msg-source">'.$r['from_nname'].'</div>';
							echo'<div class="msg-text">'.$r['m_content'].'</div>';
						echo '</div>';
						echo '<div class="msg-time">'. ( ( date("Y-m-d", $d)==date("Y-m-d") ) ? date("h:i a", $d) : date("m-d", $d) ).'</div>';
					echo'</div>';

				}
			}
			else echo '暂时没有人给您发消息哦～';
		}
		else{
			if ($empty2 == false){
				foreach($system_msg as $r){
					$d=strtotime($r['m_time']);
					echo'<div class="msg-detail">';
						echo"<img src=".$char.base_url('image/xunqu.jpg').$char.'>';
						echo'<div class="msg-detail-content">';
							echo'<div class="msg-source">'.'管理员'.'</div>';
							echo'<div class="msg-text">'.$r['m_content'].'</div>';
						echo '</div>';
						echo '<div class="msg-time">'.( ( date("Y-m-d", $d)==date("Y-m-d") ) ? date("h:i a", $d) : date("m-d", $d) ).'</div>';
					echo'</div>';
				}
			}
			else echo '暂时没有系统消息哦～';
		}

	?>
</div>


<div class="modal fade" id="msg_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="msg_reply_img" src="<?php echo base_url('image/photo_default.gif')?>">
        <span id="msg_person">王永强</span>
        <span class='msg_reply_time' id='msg_reply_time'>04:35am</span>
      </div>
      <div class="modal-body">
      	<p id="msg_note" style="word-break: break-all;">听说张之铖又找妹纸了？！！</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
<script>

	$(function(){
		$(".msg-detail-content").bind("click",function(){
			$tmp1 = $(this).find(".msg-source").first().text();
			$tmp2 = $(this).find(".msg-text").first().text();
			$tmp3 = $(this).nextAll('.msg-time').first().text();
			$('#msg_person').text($tmp1);
			$('#msg_note').text($tmp2);
			$('#msg_reply_time').text($tmp3);
			$('#msg_reply').modal('show');
		});
	});
</script>
