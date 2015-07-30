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
    <link href="<?=base_url('css/Bootstrap/dist/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/base.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/user_info/user_info.css')?>" rel="stylesheet">

    <link href="<?=base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">
        <!--公告样式-->
<!--     <link rel="stylesheet" type="text/css" href="<?=base_url('css/change/normalize.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/change/demo.css')?>" /> -->

    <!--必要样式-->

    <script src="<?=base_url('js/jquery-1.10.2.min.js')?>"></script>
    <script src="<?=base_url('js/modernizr.custom.js')?>"></script>




  </head>
  

  <nav class="nav_fix navbar navbar-default " id="nav_fix">
      <div class="container-fluid0 bc-main">
        <div class="navbar-header">
          <a href="<?=$this->session->userdata('backurl');?>" class="pull-left m-l-sm c-black"><span><i class="fa fa-angle-left c-white"></i> </span></a>
          <h4 class="c-white">个人主页</h4>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        </div><!-- /.navbar-collapse -->

          
      </div><!-- /.container-fluid -->

    </nav>

  <div class="profile-header clearfix" style="background:url(<?=base_url('image/01/5.jpg')?>) center center; background-size:cover">
    
    <div class="profile-header-contents">
      <div class="profile-header-overlay">
        <figure class="m-b inline p">
          <a href="<?=base_url('User/myinfo')?>" class="">
            <img src="<?=base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle profile-header-logo" />
            <p><span class="badge badge-green bc-blue c-white"><i class="fa fa-mars"></i></span></p>
          </a>
        </figure>
        <div class="block user_name">
          <h4 class="block profile-header-heading" >朗然与早秀<span herf="" class="meta-rank pull-left">Lv.9</span></h4>
        </div>
        <em class="profile-header-subheading">Professional Consultant</em>
        <div class="info_view">
          <div class="info_view_fix">
            <span href="#"><span>9</span><span>关注 </span></span>
            <span style="margin-left:2px;margin-right:2px">|</span>
            <span href="#"><span>124</span><span>浏览</span></span>
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
    <div class="profile-header-background" style="background:url(<?=base_url('image/01/4w.jpg')?>) center center; background-size:cover"></div>
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

          </div>        </section>
        <section id="section-bar-3">
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