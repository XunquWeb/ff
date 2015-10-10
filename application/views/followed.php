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


<!-- 这里就先不用ajax了，因为还有一些页面要写  follow_line_top直接用链接跳转吧，传不同的参数 php echo的时候也可以区分开  建议data－target 加上用户id作为后缀  区分不同的人的回复-->
<!--
		<div class="container" id="msg-detail-list">
			<div class="msg-detail" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
				<img src="<?php echo base_url('image/photo_default.gif')?>">
				<div class="msg-detail-content">
					<div class="msg-source">王永强</div>
					<div class="msg-text">这里是个性签名</div>
				</div>
			</div>
			<div class="msg-detail" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
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
				if($arr!=123)
				{
					foreach ($arr as $r) {
						if($r['sign']=='')
							$r['sign']="这个人很懒什么也没留下";
									echo "<a href=".base_url('user/myinfo/').'/'.$r['followed_id']." >"."<div class="."msg-detail"." data-target="."#msg_reply "."data-whatever="."@someone".">";
									$src = base_url('image/photo/').'/'.$r['followed_id'];
									$err = "'../../image/photo_default.gif'";
									echo "<img src="."'".$src."'"." "."onerror="."this.src=".$err." >";
									
									echo "<div class='msg-detail-content'><div class='msg-source'>".$r['followername']."</div><div class='msg-text'>".$r['sign']."</div></div></div></a>";
					}
				}
				else{
					echo "你没有关注任何人哦！";
				}
			?>
		</div>


<!-- Modal -->
<div class="modal fade" id="msg_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span>发私信</span>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
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