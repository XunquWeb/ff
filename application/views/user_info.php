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
    <link href="<?=base_url('css/user_info.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">
        <!--公告样式-->
<!--     <link rel="stylesheet" type="text/css" href="<?=base_url('css/change/normalize.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/change/demo.css')?>" /> -->

    <!--必要样式-->

    <script src="<?=base_url('js/jquery-1.10.2.min.js')?>"></script>
    <script src="<?=base_url('js/modernizr.custom.js')?>"></script>




  </head>


  <div style="background:url(<?=base_url('image/users/bg-3.jpg')?>) center center; background-size:cover">
    <div class="wrapper-lg bg-white-opacity">
      <div class="row m-t">
          <div class="col-sm-7 ">
            <div class="meta-full m-b">
              <a href="http://localhost/ff" class="c-black"><span><i class="fa fa-chevron-left"></i> 返回 </span></a>
              <span class="pull-right m-l-sm"><i class="fa fa-comment"></i></span>
              <span class="pull-right "><i class="fa fa-user"></i> </span>
            </div>
            <div class="meta-left pull-left text-center">
              <figure>
                <a href="http://localhost/ff/User/myinfo" class=""><img src="<?=base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" /></a>
                <figcaption class="ratings">
                <p><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a>
                </p>
                </figcaption>
              </figure>
            </div>
            <div class="meta-right pull-right clear m-b">
              <div class="m-b m-t-sm">
                <span class="h3 m-l-sm">John.Smith</span>
                <small class="m-l">London, UK</small>
              </div>
              <p class="m-b-sm m-l-sm user_sig"><i class="fa fa-quote-left m-r"></i>你知道吗，我是个诗人~
              </p>
              <div class="user_item m-t m-l-sm">
                <i class="user_icon" style="background-position:-0px -203px;"></i>
                <span>程序猿,艺术家</span>
              </div>
              <div class="user_item m-t m-l-sm">
                <i class="user_icon" style="background-position:-0px -140px;"></i>
                <span>旅游，出行，读书</span>
              </div>
            </div>
            <div class="meta">
                  <span class="meat_label"><i class="fa fa-group"></i> 威望 : <em class="meta-text">15</em></span>
                  <span class="meat_label"><i class="fa fa-thumbs-up"></i> 赞同 : <em class="meta-text">11</em></span>
                  <span class="meat_label"><i class="fa fa-heart"></i> 感谢 : <em class="meta-text">0</em></span>
                  <a href="javascript:;" class="m-l-sm pull-right follow btn btn-normal btn-success" onclick="AWS.User.follow($(this), 'user', 7);" data-original-title="" title=""><span>关注</span> <em>|</em> 10</a>
              </div>
          </div>

      </div>
    </div>
  </div>
  <div class="wrapper">
    <section>
    <div class="tabs">
      <nav class="bg-white b-b">
        <ul class="nav nav-pills nav-sm">
          <li><a href="#section-bar-1">状态</a></li>
          <li><a href="#section-bar-2">信息</a></li>
          <li><a href="#section-bar-3">活动</a></li>
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
                                      <h4 class="timeline-title">New Project</h4>
                                      <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p>
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
                                      <h4 class="timeline-title">Job Meeting</h4>
                                      <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette.</p>
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
                                      <h4 class="timeline-title">Daily Feeds</h4>
                                      <p><img src="http://lorempixel.com/45/45/nature/3/" alt="" class="timeline-img pull-left">Parsley amaranth tigernut silver beet maize fennel spinach ricebean black-eyed. Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p>
                                  </div>
                              </div>
                              <div class="timeline-entry-inner">
                                  <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><i class="fa fa-plus"></i>
                                  </div>
                              </div>
                          </article>
                      </div>
                      <a id="tocreat" herf=""  style="display:inline;"><i class="fa fa-plus"></i></a>
                      <div id="totop"  style="display:inline;"><i class="fa fa-angle-up"></i></div>
            </div>
        </section>
        <section id="section-bar-2">
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
                                      <h4 class="timeline-title">New Project</h4>
                                      <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p>
                                  </div>
                              </div>
                          </article>
                      </div>
            </div>
        </section>
        <section id="section-bar-3"><p>3</p></section>
      </div><!-- /content
    </div><!-- /tabs -->
    </section>
  </div>

  

  <script src="<?=base_url('js/waypoints.min.js')?>" type="text/javascript"></script>
  <script src="<?=base_url('js/navbar2.js')?>" type="text/javascript"></script>


  <script src="<?=base_url('js/cbpFWTabs.js')?>"></script>
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
  </script>

</html>