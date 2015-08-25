<!-- Edit By  DannyJay  201507151256 -->
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
    <title>寻趣</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap/dist/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/base.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/home/home.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('js/jquery-2.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('js/modernizr.custom.js')?>"></script>

    <script type="text/javascript" src="<?php echo base_url('js/carousel/jquery.event.drag-1.5.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/carousel//jquery.touchSlider.js')?>"></script>
    <script type="text/javascript">
    // $(document).ready(function(){

    //   $dragBln = false;
  
    //   $(".carousel_content").touchSlider({
    //     flexible : true,
    //     speed : 200,
    //     paging : $(".carousel_herf a"),
    //     counter : function (e){
    //       $(".carousel_herf a").removeClass("on").eq(e.current-1).addClass("on");
    //     }
    //   });
      
    //   $(".carousel_content").bind("mousedown", function() {
    //     $dragBln = false;
    //   });
      
    //   $(".carousel_content").bind("dragstart", function() {
    //     $dragBln = true;
    //   });
      
    //   $(".carousel_content a").click(function(){
    //     if($dragBln) {
    //       return false;
    //     }
    //   });
      
    // });
     </script>

    <script type="text/javascript">
    $(document).ready(function(){


      $dragBln = false;
  
      $("#section-bar-2 .carousel_content").touchSlider({
        flexible : true,
        speed : 200,
        paging : $("#section-bar-2 .carousel_herf a"),
        counter : function (e){
          $("#section-bar-2 .carousel_herf a").removeClass("on").eq(e.current-1).addClass("on");
        }
      });
      
      $("#section-bar-2 .carousel_content").bind("mousedown", function() {
        $dragBln = false;
      });
      
      $("#section-bar-2 .carousel_content").bind("dragstart", function() {
        $dragBln = true;
      });
      
      $("#section-bar-2 .carousel_content a").click(function(){
        if($dragBln) {
          return false;
        }
      });

      // w1 = $('.padder_listcon .inv_slider').width();
      // w2 =  $('.padder_listcon .inv_slider a').width();
      // maxw = w1 -w2 -5;
      // $('.padder_listcon .inv_slider h2').css('max-width',maxw);
      
    });
    </script>

  
  </head>
  <body>
<!--   <div id="mask" style="display:none;"></div>
  <div id="pt-main" class="pt-perspective">
    <div class="pt-page pt-page-1">
     -->
    <nav class="nav_fix navbar navbar-default " id="nav_fix">
        <div class="container-fluid bc-main">
            <div class="navbar-header">
              <a id="menu-toggle" href="#" class="slide-menu"><i class="fa fa-bars"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        </div><!-- /.navbar-collapse -->  
      </div><!-- /.container-fluid -->
      
      <!-- 侧边导航 -->
      <div class="slide-mask"></div>
      <aside class="slide-wrapper" style="display:none;">
              <ul id="side-menu" class="nav">
                <li class="user-panel">
                  <div class="user-info">
                    <div style="margin-top:10px;" class="row">
                      <div class="col-xs-4 col-sm-4 text-center">
                        <figure>
                          <a href="http://localhost/ff/User/myinfo" class=""><img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" /></a>
                          <figcaption class="ratings">
                          <p><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a>
                          </p>
                          </figcaption>
                        </figure>
                      </div>
                      <div class="col-xs-8 col-sm-8">
                        <h2>John Doe</h2>
                        <div class="user_item">
                          <i class="user_icon" style="background-position:-0px -203px;"></i>
                          <span>程序猿，单身狗</span>
                        </div>
                        <div class="user_item">
                          <i class="user_icon" style="background-position:-0px -140px;"></i>
                          <span>旅游，出行，读书</span>
                        </div>
                        <!-- <div class="user_item">
                          <i class="user_icon" style="background-position:-0px -123px;"></i>
                          <span>程序猿，单身狗</span>
                        </div> -->
                      </div>
                      <div class="col-xs-12 col-sm-12 user_sig">
                        <p>你知道吗，我是个诗人~</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="user_content">
                      <p class="user_inter"></p>
                      <a href="#" class="user_toggle">
                        <i class="fa fa-bell fa-fw"></i>
                        <span class="badge badge-green">3</span>
                        <span class="user_toggle_info">消息提醒</span>
                      </a>
                      <p class="user_inter"></p>
                      <a href="#" class="user_toggle">
                        <i class="fa fa-comments"></i>
                        <span class="badge badge-blue">3</span>
                        <span class="user_toggle_info">聊天讯息</span>
                      </a>
                      <p class="user_inter"></p>
                      <a href="#" class="user_toggle">
                        <i class="fa fa-sitemap fa-fw"></i>
                        <!-- <span class="badge badge-green">3</span> -->
                        <span class="user_toggle_info">我的群组</span>
                      </a>
                      <p class="user_inter"></p>
                      <a href="#" class="user_toggle">
                        <i class="fa fa-tachometer fa-fw"></i>
                        <!-- <span class="badge badge-green">3</span> -->
                        <span class="user_toggle_info">我的活动</span>
                      </a>
                </li>
              </ul>
      </aside>
    </nav>

  <div class="wrapper">
    <section>
    <div class="tabs">
      <nav class="bg-white b-b">
        <ul class="nav nav-pills nav-sm nav-main">
          <li><a href="#section-bar-1">推荐</a></li>
          <li><a href="#section-bar-2">约单</a></li>
          <li><a href="#section-bar-3">话题</a></li>
          <li><a href="#section-bar-4">排行榜</a></li>
        </ul>
      </nav>
      <div class="content-wrap">
        <section id="section-bar-1">
            <div class="padder">

            </div>
        </section>
        <section id="section-bar-2">
          <div class="padder">
            <div class="main_carousel">
                <div class="carousel_herf">
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <!-- <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a> -->
                </div>
                <div class="carousel_content">
                  <ul>
                    <li>
                      <a href=""><i class="fa fa-subway"></i>出游</a>
                      <a href=""><i class="fa fa-facebook"></i>运动/健身/减肥</a>
                      <a href=""><i class="fa fa-facebook"></i>换书/卖书/送书</a>
                      <a href=""><i class="fa fa-facebook"></i>拼车</a>
                      <a href=""><i class="fa fa-facebook"></i>学习课业</a>
                      <a href=""><i class="fa fa-facebook"></i>约奇葩</a>
                      <a href=""><i class="fa fa-facebook"></i>项目/比赛/创业</a>
                      <a href=""><i class="fa fa-facebook"></i>摄影</a>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-facebook"></i>佳片共赏</a>
                      <a href=""><i class="fa fa-facebook"></i>技能交换</a>
                      <a href=""><i class="fa fa-facebook"></i>约谈约聊</a>
                      <a href=""><i class="fa fa-facebook"></i>其他</a>
                    </li>
                    <!-- <li></li>
                    <li></li>
                    <li></li> -->
                  </ul>
                </div>
            </div>
            <div class="padder_title">
              <h3>
                <span class="title_classify">全部</span>
                <span >/</span>
                <span class="title_time">最新</span>
              </h3>
              <div class="title_info pull-right">
                <a href="">时间</a>
                <span>|</span>
                <a href="">分类</a>
                <span>|</span>
                <a href="">筛选</a>
              </div>
            </div>
            <a id="tocreat" herf=""  style="display:none;"><i class="fa fa-plus"></i></a>
            <div id="totop"  style="display:none;"><i class="fa fa-angle-up"></i></div>
            <div class="padder_list">
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>
               <div class="padder_listcon clearfix">
                 <div class="user_slider">
                   <figure class="m-b inline p">
                      <a href="" class="">
                        <img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                        <p>
                          <span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span>
                          <!-- <a href=""><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i><i class="fa fa-drupal c-orange"></i>Lv.9</a> -->
                        </p>
                      </a>
                    </figure>
                 </div>
                 <div class="inv_slider">
                   <h2 class="inv_title">
                      <i class="fa fa-coffee c-green"></i>
                      <div class="inv_titlecon">
                        <span class="icon-ding"></span>
                        <a href="" class="invinfo_title">今晚六点半去看大圣归来~~</a>
                      </div>
                      <a href="" class="inv_label c-pink borc-pink pull-right">电影</a>
                    </h2>
                    <div class="inv_reply clearfix">
                      <i class="fa fa-comment"></i>
                      <div class="inv_replycon">
                          <span class="inv_replysign remind">[提醒]</span>
                          <!-- <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="replyuserhead"><img src="http://img.mukewang.com/user/5568959b000184a207400555-40-40.jpg" width="20" height="20"> </a>
                          <a href="/myclub/otherquestion?uid=1992159" target="_blank" title="sanshu1" class="nickname">sanshu1: </a> -->
                          <a href="" class="nickname c-grey">dannyjay:</a>
                          <span class="inv_replyconcrete">我帮每人付5元~</span>
                        </div>
                    </div>
<!--                     <div class="inv_info clearfix">
                      <a class="inv_partin">
                        <i class="fa fa-users c-orange-sm"></i>
                        <span class="inv_replysign remind">人数：4/6</span>
                      </a>
                      <a class="inv_timelimit">
                        <i class="fa fa-clock-o c-red"></i>
                        <span class="inv_replysign remind">截止时间：3点前</span>
                      </a>
                      <a href="" class="inv_label c-green borc-green pull-left">正在报名中</a>
                      <a href="" class="inv_label c-danger borc-danger pull-left">缺2个</a>
                    </div> -->
                 </div>
                 <div class="more_slider clearfix">
                   <span class="user_name pull-left">朗然与早秀</span>
                   <span class="inv_showtime pull-left">09:27</span>
                   <span class="inv_source pull-left">来源：上海交大</span>
                   <span class="inv_trends pull-right"><i class="fa fa-thumbs-up c-black">13</i><i class="fa fa-comment-o c-black"></i>4</span>
                 </div>
               </div>

            </div>
          </div>
        </section>
        <section id="section-bar-3">
          <div class="padder">
                  3
          </div>
        </section>
        <section id="section-bar-4">
          <div class="padder">
                  4
          </div>
        </section>
      </div>
    </section>

  </div>


</body>
  

    <script type="text/javascript">
    $(function(){
        

    });
    </script>

  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
  <script type="text/javascript">
    $(function(){
      $('aside.slide-wrapper').on('touchstart', 'li', function(e){
        $(this).addClass('current').siblings('li').removeClass('current');
      });
      
      $('a.slide-menu').on('click', function(e){
        // var wh = $('div.wrapper').height();
        var wh = $('body').height();
        var wh1 = $('body').height()-$('.user-panel').height() - $('.nav_fix').height();
        var wh2 = $('body').height() - $('.nav_fix').height();
        var ma = $('.nav_fix').height();
        // console.log($('body').height());
        // console.log($('.user-panel').height());
        $('div.slide-mask').css('height', wh2).css('margin-top',ma).show();
        $('aside.slide-wrapper').css('height', wh2).css('margin-top',ma).fadeIn(300).addClass('moved');
        $('li.user_content').css('height', wh1).show();
      });
      
      $('div.slide-mask').on('click', function(){
        $('div.slide-mask').hide();
        $('aside.slide-wrapper').removeClass('moved').fadeOut(300);
      });
    });
  </script>
  
  <script src="<?php echo base_url('js/cbpFWTabs.js')?>"></script>
  <script type="text/javascript">
  (function() {

    [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
      new CBPFWTabs( el );
    });

  })();
  </script>

    <script type="text/javascript">
    $(function(){
      $(window).scroll(function(){
        if ($(this).scrollTop() < 350) {
            $('#totop') .fadeOut();
            $('#tocreat') .fadeOut();
        } else {
            $('#totop') .fadeIn();
            $('#tocreat') .fadeIn();
        }
       });
      $('#totop').on('click', function(){
        $('html, body').animate({scrollTop:0}, 'fast');
        return false;
      })
      $('#tocreat').on('click', function(){
        
      })
    });
  </script>
