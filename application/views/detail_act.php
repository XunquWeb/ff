<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/detail_act.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/message.css')?>" rel="stylesheet">
  </head>

<div class="detail_title">
    <h1 class="detail_title_h1" id="dt_title"><?php echo $a_name;?></h1>
</div>

<div class="detail_user hdMan">
    <div class="userPicA">
      <a href="＃" ontouchstart="">
      <img class="userPic default_img" src="<?base_url("image/p2181454027.jpg")?>" alt="" ontouchstart="" >
      </a>
    </div>
    <div class="hdman_r">
      <div class="yhName">
        <a href=<?php echo "\"" . base_url('User/myinfo') . "/" . $u_id . "\"";?> class="subinfo_name" id="subinfo_name" ontouchstart="" style="max-width: 100px;"><?php  echo $name;?></a>
      </div>
      <div class="dt_review_item_count">
       <!-- <a class="info_share" id="info_share" style="color: rgb(153, 153, 153);">分享 <?php echo $share;?></a><span id="info_hits">阅读 <?php echo $browse;?></span> -->
      </div>
    </div>
      <input type="hidden" id="postUserId36" value="a8fd3">
</div>

<div class="detail_time_attr_join">
  <div class="detail_time_attr_join_gray">


	  <div class="detail_Time">
	      <span class="glyphicon glyphicon-time" ></span>
	      <div class="detail_Time_n">
	          <p>
                <?php
                  echo substr($start_time,5,11) . "&nbsp";
                  echo "至" . "&nbsp";
                  echo substr($end_time,5,11) . "&nbsp";
                  echo "<br>";
                ?>
	              <span><?php echo substr($deadline,5,11) . "&nbsp";?>报名截止</span>
	          </p>
	      </div>
	  </div>
    <div class="detail_Attr">
        <div class="dt_address_item" ontouchstart="">
            <div class="detail_Attr_K">
            	<span class="glyphicon glyphicon-map-marker" ></span>
                <p class="addressP" style="<?php if(!$place) echo  'display:none';?>">
                                    <?php if(!$place) echo "无"; 
                                          else echo $place;
                                    ?>
                                    
                </p>
            </div>

        </div>
    </div>
    <div class="detail_Joinnum" id="detail_Joinnum">
      <div class="detail_Joinnum_t">
      	<span class="glyphicon glyphicon-align-left detail_Joinnum_t_icon" ></span>
      	<p>已有<span><?php echo $join_num;?></span>人报名</p>
      </div>
      <div class="detail_Joinnum_b">
         <p>
          <?php 
            if($max_num==0){
              echo "不限人数";
            }
            else{
              echo "限<span>".$max_num."</span>人报名";
            }

          ?>
         </p>
      </div>
    </div>
  </div>
</div>

<div  class="comment_header">
    <h4 class="sub-title-decoration">约单详情</h4>
</div>

<div class="dt_act_board">
  <div class="dt_act_detail">
     <div>
        <?php  echo  $extra;?>
        <!--如果你热衷探索技术或者深谙营销之道或者什么都不会但有一颗想改变世界的心，那么就请加入我们。我们是交大最有情怀的创业小分队，我们致力于解决自己身边的问题～
        -->
     </div>
  </div>
</div>
<div class="dt_like" onclick="agree()">
      <a href="" ontouchstart="">
        <p ontouchstart="">赞(<span id="dt_like_count"><?php echo count($likes);?></span>)</p>
        <span class="zanWk" ontouchstart=""><img id="img_dt_like" src="http://img1.hudongba.cn/static_v4/images/detail/dt_like.png" alt=""></span>
      </a>
</div>
<div style="<?php echo count($likes) > 0 ?  : "display:none";?>" class="dt_like_main" id="dt_like_main">
    <div class="dt_like_main_top"><img class="zanJiao" src="http://img1.hudongba.cn/static_v4/images/detail/zanJiao.png" alt=""></div>
    <div class="dt_like_list" id="dt_like_list">
      <span>
        <img src="http://img1.hudongba.cn/static_v4/images/detail/dt_like.png" class="zanIcon" id="icon_zan_ok2"></span>
        <?php
          $i = 0;
          if(count($likes) < 6)
            foreach ($likes as $r) {
              echo "<a href=\"" . base_url('User/myinfo') . "/" . $r['id'] . "\" class='dt_nick' >" . $r['nname'] . "</a>";
            }
          else
          {
            while($i<=5) {
              echo "<a href=\"" . base_url('User/myinfo') . "/" . $r['id'] . "\" class='dt_nick' >" . $r['nname'] . "</a>";
              $i = $i+1;
            } 
            echo "等人";
          }
        ?>
        <a>觉得很赞</a>
      </span>
    </div>
</div>



<!--
<div  class="comment_header">
    <h4 class="sub-title-decoration">闲聊</h4>
</div>
<div class="dt_comment_board">
    <div class="msg-detail dt-msg-fix" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
            <img src="<?php echo base_url('image/photo_default.gif')?>">
            <div class="msg-detail-content">
              <div class="msg-source">王永强</div>
              <div class="msg-text">怎么报名的，组队呀～</div>
            </div>
            <div class="msg-time">晚上18:08</div>
    </div>
    <div class="msg-detail" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
            <img src="<?php echo base_url('image/photo_default.gif')?>">
            <div class="msg-detail-content">
              <div class="msg-source">曹小超</div>
              <div class="msg-text">楼上技术大神。</div>
            </div>
            <div class="msg-time">晚上18:14</div>
    </div>
    <div class="msg-detail" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
            <img src="<?php echo base_url('image/photo_default.gif')?>">
            <div class="msg-detail-content">
              <div class="msg-source">王永强</div>
              <div class="msg-text">@曹小超：又逗我...</div>
            </div>
            <div class="msg-time">晚上19:08</div>
    </div>
</div>

<div ontouchstart="" onclick="" class="dt_review_top" data-toggle="modal" data-target="#msg_reply" data-whatever="@someone">
      <p id="dt_review_count" class="dt_review_topL">快来发表你的评论</p>
      <p class="dt_review_topR" ontouchstart=""><span ontouchstart="">评论</span><a><img src="<?php echo base_url('image/comment_icon.png')?>" title="评论"></a></p>
      <a id="plWei" name="plWei"></a>
</div>

-->
<div class="height-fix" style="height:68px">
</div>
<div class="dt_join_bar dt_join_bar_outside" >
      <div class="l">
        <div>
          <a href="<?php echo base_url('act/submit/')?>" ontouchstart="">
            <p>
              <img class="dt_join_bar_icon" src="<?php echo base_url('image/icon_add.png')?>" alt="">
              <span>我也要发约单</span>
            </p>
          </a>
        </div>
      </div>
      <div class="r">
        <div>
          <a onclick="join()" >
            <p>
              <img class="dt_join_bar_icon" src="<?php echo base_url('image/icon_man2.png')?>" alt="">
              <span>我要去约</span>
            </p>
          </a>
        </div>
      </div>
</div>


<!-- Modal -->
<div class="modal fade" id="msg_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog" style="margin-top:55px">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix" style="padding-top: 10px;padding-bottom: 10px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span>发布评论</span>
      </div>
      <div class="modal-body" style="padding-bottom:5px;">
        <form>
          <div class="form-group">
            <textarea class="form-control" id="message-text" style="height: 90px;"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary">确认发布</button>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>

<script>
  function agree(){
            $.ajax({  
                url : "<?php echo base_url('Act/actlikes')?>"+"/"+<?php echo $a_id ?>,    
                success : function(data)  
                {
                  $temp = $('#dt_like_count').text();
                  $('#dt_like_count').text($temp + 1);  
                }
            }); 
  }




  function join(){
      var starttime = "<?php echo $start_time ?>";
      var deadline = "<?php echo $deadline ?>";
      var starttime = new Date(starttime.replace("-", "/").replace("-", "/"));
      var deadline = new Date(deadline.replace("-", "/").replace("-", "/"));
      var mydate = new Date();
      if (mydate > deadline) {
          alert('报名已截止');
          return false;
      }
      var already = "<?php echo $join_num;?>";
      var max = "<?php echo $max_num;?>";
      if( (already >= max) && (max!=0))
      {
        alert('报名人数已满');
        return false;
      }
      if("<?php echo $this->session->id?>" == "<?php echo $u_id?>" ) {
        alert("您是发起者，亲...");
        return false;
      }
      window.location.href="<?php echo base_url('act/join/').'/'.$a_id; ?>";
  }
</script>