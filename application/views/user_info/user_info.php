<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
      <meta http-equiv="Page-Enter" content="RevealTrans(duration=3,Transitionv=12)">
      <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
      <title>Bootstrap 101 Template</title>
    <link href="<?php echo base_url('css/Bootstrap/dist/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/base.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/user_info/user_info.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">
        <!--公告样式-->
<!--     <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/change/normalize.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/change/demo.css')?>" /> -->

    <!--必要样式-->

    <script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>
    <script src="<?php echo base_url('js/modernizr.custom.js')?>"></script>




  </head>
  

  <nav class="nav_fix navbar navbar-default " id="nav_fix">
      <div class="container-fluid0 bc-main">
        <div class="navbar-header">
          <a href="<?php echo $this->session->userdata('backurl');?>" class="pull-left m-l-sm c-black"><span><i class="fa fa-angle-left c-white"></i> </span></a>
          <h4 class="c-white">个人主页</h4>
          <a class="addoredit"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        </div><!-- /.navbar-collapse -->

          
      </div><!-- /.container-fluid -->
  </nav>
  <div class="personal_info_message " data-toggle="modal" data-target="#msg_reply" data-whatever="@someone" >
      <span class="glyphicon glyphicon-edit"></span>
      <span>私信</span>
  </div>
  <div class="profile-header clearfix" style="background:url(<?php echo base_url('image/01/5.jpg')?>) center center; background-size:cover">
    
    <div class="profile-header-contents">
      <div class="profile-header-overlay">
        <figure class="m-b inline p">
          <a href="<?php echo base_url('User/myinfo')?>" class="">
            <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle profile-header-logo" />
            <form method="post" action=""<?php echo base_url('User/post_photo')?>" ">
								<input type="file" name="file" />
								<input type="submit"/>
								</form>
            <p><span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span></p>
          </a>
        </figure>
        <div class="block user_name">
          <h4 class="block profile-header-heading" ><?php echo $nname;?><!--<span herf="" class="meta-rank pull-left">Lv.9</span>--></h4>
        </div>
        <em class="profile-header-subheading">          
          <?php 
            if($sign == "")
              echo "这个人很懒，什么也没有留下";
            else
              echo $sign;
          ?>
        </em>
        <div class="info_view">
          <div class="info_view_fix">
            <span href="#"><span><?php echo $follow_num;?></span><span>关注 </span></span>
            <span style="margin-left:2px;margin-right:2px">|</span>
            <span href="#"><span><?php echo $browse_num;?></span><span>浏览</span></span>
          </div>
        </div>
        <div class="profile-header-socials">
          <a href="">
            <i class="fa fa-facebook"></i>
              8k+ Likes
          </a>
          <a href="">
            <i class="fa fa-twitter"></i>
              9k+ Followers   
          </a>
          <a href="">
            <i class="fa fa-google-plus"></i>
              2.5k + Plus
          </a>
        </div>
        
    </div>
    <div class="profile-header-background" style="background:url(<?php echo base_url('image/01/4w.jpg')?>) center center; background-size:cover"></div>
    </div>
    
  </div>


  <div class="wrapper">
    <section>
    <div class="tabs">
      <nav class="bg-white b-b">
        <ul class="nav nav-pills nav-sm">
          <li><a href="#section-bar-1">状态</a></li>
          <li><a href="#section-bar-2">信息</a></li>
          <!--<li><a href="#section-bar-3">约单</a></li>-->
        </ul>
      </nav>
      <div class="content-wrap">
        <section id="section-bar-1">
            <div class="padder">
              <div class="timeline-centered timeline-sm">
                          <article class="timeline-entry">
                              <div class="timeline-entry-inner">
                                  <time datetime="2014-01-10T03:45" class="timeline-time"><span>12:45 AM</span><span>Today</span>
                                  </time>
                                  <div class="timeline-icon bg-violet"><i class="fa fa-exclamation"></i>
                                  </div>
                                  <div class="timeline-space"></div>
                                  <div class="timeline-label">
                                      <h4 class="timeline-title">新的关注</h4>
                                      <p>土拨鼠1313关注了苏小欢</p>
                                  </div>
                              </div>
                          </article>
                          <article class="timeline-entry">
                              <div class="timeline-entry-inner">
                                  <time datetime="2014-01-10T03:45" class="timeline-time"><span>9:15 AM</span><span>Today</span>
                                  </time>
                                  <div class="timeline-icon bg-green"><i class="fa fa-group"></i>
                                  </div>
                                  <div class="timeline-space"></div>
                                  <div class="timeline-label bg-green">
                                      <h4 class="timeline-title">新的趣谈</h4>
                                      <p>好呀！IDG比赛算我一个～</p>
                                  </div>
                              </div>
                          </article>
                          <article class="timeline-entry">
                              <div class="timeline-entry-inner">
                                  <time datetime="2014-01-09T13:22" class="timeline-time"><span>8:20 PM</span><span>04/03/2013</span>
                                  </time>
                                  <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i>
                                  </div>
                                  <div class="timeline-space"></div>
                                  <div class="timeline-label bg-orange">
                                      <h4 class="timeline-title">新的约单</h4>
                                      <p><img src="http://lorempixel.com/45/45/nature/3/" alt="" class="timeline-img pull-left">土拨鼠1313参加了苏小欢发起的“寻趣小分队招募”</p>
                                  </div>
                              </div>
                              <div class="timeline-entry-inner">
                                  <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><i class="fa fa-plus"></i>
                                  </div>
                              </div>
                          </article>
              </div>
              <a id="tocreat" href=""  style="display:none;"><i class="fa fa-plus"></i></a>
              <div id="totop"  style="display:inline;"><i class="fa fa-angle-up"></i></div>
            </div>
        </section>
        <section id="section-bar-2">
          <div class="padder">
              <div class="">
                  <div class="portlet box">
                    <div class="portlet-header">
                      <div class="caption"><span><i class="fa fa-user"></i></span>个人信息</div> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td width="30%">姓名</td>
                                                <td><?php echo $nname;?></td>
                                            </tr>                                            
                                            <tr>
                                                <td width="30%">邮箱</td>
                                                <td><?php echo $email;?></td>
                                            </tr>
                                            <?php
                                            if($sex!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">性别</td>
                                                <td>
TR;
echo $sex;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
                                            }
                                            if($college!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">学校</td>
                                                <td>
TR;
echo $college;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
                                            }
                                            if($major!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">专业</td>
                                                <td>
TR;
echo $major;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
                                            }
                                            if($home!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">家乡</td>
                                                <td>
TR;
echo $home;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
                                            }
                                            if($hobby!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">兴趣爱好</td>
                                                <td>
TR;
echo $hobby;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
                                            }
                                            if($phone!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">联系方式</td>
                                                <td>
TR;
echo $phone;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
}
                                            if($constellation!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">星座</td>
                                                <td>
TR;
echo $constellation;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
}
                                            if($estate!=null){
                                              echo <<<TR
                                            <tr>
                                                <td width="30%">情感状态</td>
                                                <td>
TR;
echo $estate;
echo <<<TR
                                                </td>
                                            </tr>                                            
TR;
                                            }



                                            ?>
                                            <!--
                                            <tr>
                                                <td width="30%">Status</td>
                                                <td><span class="label label-success">Active</span>
                                                </td>
                                            </tr>
                                            -->
                                            <tr>
                                                <td width="30%">Join Since</td>
                                                <td> Jun 03, 2014</td>
                                            </tr>
                                        </tbody>
                                    </table>                      
                         <!--  <a class="right carousel-control" href="#carousel-channel-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a> -->
                        
                    </div>

                  </div>
                            
             </div>

          </div>        </section>
<!--         <section id="section-bar-3">
          <div class="padder">
              <div class="">
                  <div class="portlet box">
                    <div class="portlet-header">
                      <div class="caption"><span><i class="fa fa-user"></i></span>个人信息</div> 
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td width="30%"></td>
                                                <td>Diane Harris</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">Email</td>
                                                <td>name@example.com</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">Address</td>
                                                <td>Street 123, Avenue 45, Country</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">Status</td>
                                                <td><span class="label label-success">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">Rating</td>
                                                <td><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%">Join Since</td>
                                                <td> Jun 03, 2014</td>
                                            </tr>
                                        </tbody>
                                    </table>                      
                         <!--  <a class="right carousel-control" href="#carousel-channel-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a> -->
                        
                    </div>

                  </div>
                            
             </div>

          </div>
        </section> 
      </div>
    </section>
  </div>


<!-- Modal -->
<div class="modal fade" id="msg_reply" tabindex="-1" role="dialog" aria-labelledby="msg_reply" aria-hidden="true">
  <div class="modal-dialog" style="margin-top:105px">
    <div class="modal-content">
      <div class="modal-header msg-modal-fix" style="padding-top: 10px;padding-bottom: 10px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span>发私信</span>
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
        <button type="button" class="btn btn-primary">确认发送</button>
      </div>
    </div>
  </div>
</div>

  <script src="<?php echo base_url('js/waypoints.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('js/navbar2.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>

  <script src="<?php echo base_url('js/cbpFWTabs.js')?>"></script>
  <script type="text/javascript">
  (function() {

    [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
      new CBPFWTabs( el );
    });

  })();


      $("#msg_reply button.btn-primary").bind("click",function(){
        var msg_text = $("#message-text").val();
        $('#msg_reply').modal('hide') 
        //alert(msg_text);
        $.ajax({
             type: "post", 
             data: {text:msg_text},
             dataType: "json",
             url: "<?php echo base_url('msg/submit').'/'.$id; ?>",
             success: function(result){
                   //返回提示信息 
                   alert(result);
                   alert("消息送达！");
                   
             }
        });
      });
  </script>

  <script type="text/javascript">
    $(function(){
      $(window).scroll(function(){
        if ($(this).scrollTop() < 300) {
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
    function following(){
        $.post(
        "<?php echo base_url('user/following').'/'.$id ?>",
        function(data){
          if(data == '0')
          {
            $('.addoredit').text("关注").attr('href',"<?php echo base_url('user').'/follow/'.$id ?>"); 
    
          }
          else
          {
            $('.addoredit').text("取消关注").attr('href',"<?php echo base_url('user').'/unfollow/'.$id ?>"); 
          }
        }
        );
        $.post(
        "<?php echo base_url('user/viewcounter').'/'.$id ?>"
        );
    }

    $(document).ready(function(){
      //alert("<?php echo $sign;?>");
      if(<?php echo $this->session->userdata('id');?> == <?php echo $id ?> )
      {
        //$('.addoredit').text("关注").attr('href',"<?php echo base_url('user').'/follow/'.$id ?>"); 
        $('.addoredit').text("编辑").attr('href',"<?php echo base_url('user/account_info')?>"); 
        $('.personal_info_message ').css('display',"none");
      }
      else{
        following();
      }        
    });


  </script>

</html>
