<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/public_forum.css')?>" rel="stylesheet">
  </head>
<div class="forum-frame">    

<!--
<div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="http://localhost:8888/ff/image/photo_default.gif" alt="">
                      </span>
                      <span class="user-name pull-left">张小铖</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">@苏小欢 约约约</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-disagree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left"></div>
                      <div class="icon icon-share pull-right"></div>
                  </div>
          </div><div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="http://localhost:8888/ff/image/photo_default.gif" alt="">
                      </span>
                      <span class="user-name pull-left">苏小欢</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">IDG大学生创业大赛有约的吗～～</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-disagree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left"></div>
                      <div class="icon icon-share pull-right"></div>
                  </div>
          </div><div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="http://localhost:8888/ff/image/photo_default.gif" alt="">
                      </span>
                      <span class="user-name pull-left">相声协会</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">小伙伴们有没有觉得相声协会的表演很赞呢～ 马上就招新了，有兴趣的请持续关注寻趣网报名哈～</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-disagree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left"></div>
                      <div class="icon icon-share pull-right"></div>
                  </div>
          </div>

          <div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="<?php echo base_url('/image/photo_default.gif')?>" alt="">
                      </span>
                      <span class="user-name pull-left">这就是用户名</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">哈哈哈哈哈哈</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-disagree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left" ></div>
                      <div class="icon icon-share pull-right" ></div>
                  </div>
          </div>
-->
          <div class="forum-box" id="first-forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="<?php echo base_url('/image/photo_default.gif')?>" alt="">
                      </span>
                      <span class="user-name pull-left">这就是用户名</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">哈哈哈哈哈哈</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left" onclick=""></div>
                  </div>
          </div>
          <div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="<?php echo base_url('/image/photo_default.gif')?>" alt="">
                      </span>
                      <span class="user-name pull-left">这就是用户名</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">哈哈哈哈哈哈</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left" onclick=""></div>
                  </div>
          </div>
           <div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="<?php echo base_url('/image/photo_default.gif')?>" alt="">
                      </span>
                      <span class="user-name pull-left">这就是用户名</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">哈哈哈哈哈哈</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left" onclick=""></div>
                  </div>
          </div>
           <div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="<?php echo base_url('/image/photo_default.gif')?>" alt="">
                      </span>
                      <span class="user-name pull-left">这就是用户名</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">哈哈哈哈哈哈</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left" onclick=""></div>
                  </div>
          </div>
           <div class="forum-box">
                  <div class="forum-top clearfix" onclick="" data-id="" data-type="">
                      <span class="forum-icon-box pull-left">
                          <img src="<?php echo base_url('/image/photo_default.gif')?>" alt="">
                      </span>
                      <span class="user-name pull-left">这就是用户名</span>
                  </div>
                  <div class="forum-content-text" onclick="" data-id="90000099">
                      <p class="text">哈哈哈哈哈哈</p>
                  </div>
                  <div class="status-box">
                      <span class="agree">
                          <span class="agree-count">1000</span>
                          点赞&nbsp;·
                      </span>
                      <span class=" comment">
                          <span class=" comment-count">1000</span>
                          评论
                      </span>
                  </div>
                  <div class="btns-group clearfix">
                      <div class="icon icon-agree pull-left" onclick=""></div>
                      <div class="icon icon-comment pull-left" onclick=""></div>
                  </div>
          </div>
          <a id="tocreat" herf="" style="display:inline;"data-toggle="modal" data-target="#submit_forum" data-whatever="@someone"><i class="fa fa-plus"></i></a>
          <div id="totop" style="display: block;"><i class="fa fa-angle-up"></i></div>
          <div id="testtest"></div>

</div>  

<!-- Modal -->
<div class="modal fade" id="submit_forum" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog" style="margin-top:55px">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix" style="padding-top: 10px;padding-bottom: 10px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span>广场趣谈</span>
      </div>
      <div class="modal-body" style="padding-bottom:5px;">
        <form id="form_forum">
          <div class="form-group">
            <textarea class="form-control" id="message-text" style="height: 90px;" name="forum_text"></textarea>
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

<!-- Modal -->
<div class="modal fade" id="submit_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog" style="margin-top:55px">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix" style="padding-top: 10px;padding-bottom: 10px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span>回复</span>
      </div>
      <div class="modal-body" style="padding-bottom:5px;">
        <form >
          <div class="form-group">
            <textarea class="form-control" id="message-text" style="height: 90px;"></textarea>
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


<script src="<?php echo base_url('js/jquery.form.js')?>"></script>


<script>
      var tmp_page = 0;
      var flag=true;
      $("#submit_forum button.btn-primary").bind("click",function(){
        var msg_text = $("#message-text").val();
        alert(msg_text);
        $.ajax({
             type: "post", 
             data: 'data='+msg_text,
             url: "<?base_url('forum/submit_forum')?>",
             success: function(result){
                   //返回提示信息
                   alert(result) ;   
             }
        });
      });
      $(function(){
        $(window).scroll(function(){
         if($(this).scrollTop() < 300) {
              $('#totop') .fadeOut();
          } else {
              $('#totop') .fadeIn();
          }
         });
         $('#totop').on('click', function(){
          $('html, body').animate({scrollTop:0}, 'fast');
          return false;
        })
      });
      $(window).scroll(function(){  
          // 当滚动到最底部以上100像素时， 加载新内容  
          if ($(document).height() - $(this).scrollTop() - $(this).height()<100) {loadMore();}
      });  
      function loadMore()  
      {   
          if(flag){
            $.ajax({  
                url : "<?php echo base_url('Forum/history_ajax')?>"+"/"+tmp_page,    
                success : function(data)  
                {  
                  //alert(data)
                  if(data!="no more history"){
                    tmp_page++;
                    $forum_arr = data.split('#');
                    $forum_dtl = {};
                    // for(var i=0;i<=9;i++){
                    //   $forum_dtl[i] = $forum_arr[i].split('&');
                    // }
                    $.each($forum_arr,function(n,value){
                          $forum_dtl[n] = value.split('&');
                          $html_temp = $("#first-forum-box").clone();
                          $html_temp.find('.user-name').text($forum_dtl[n][1]);
                          $html_temp.find('.text').text($forum_dtl[n][3]);
                          //alert($forum_dtl[n][3]);
                          $(".forum-frame").append($html_temp);
                    }

                    );
                    

                  }
                  else{
                    flag = false;
                  }
                }  
            });  
          }
      }  
      function refresh()
      {

      }

</script>
</html>
