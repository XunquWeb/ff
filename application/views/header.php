<!-- Edit By  DannyJay  201507051934 -->
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

    <!-- Bootstrap -->
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/header.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script src="<?=base_url('js/jquery-1.10.2.min.js')?>"></script>
  </head>

  <body>
    
  
    <nav class="nav_fix navbar navbar-default " id="nav_fix">
      <div class="container-fluid">
        <div class="navbar-header">
          <a id="menu-toggle" href="#" class="slide-menu"><i class="fa fa-bars"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        </div><!-- /.navbar-collapse -->  
      </div><!-- /.container-fluid -->
      
      <!-- 侧边导航 -->
      <div class="slide-mask"></div>
      <aside class="slide-wrapper">
              <ul id="side-menu" class="nav">
                <li class="user-panel">
                  <div class="user-info">
                    <div style="margin-top:10px;" class="row">
                      <div class="col-xs-4 col-sm-4 text-center">
                        <figure>
                          <a href="http://localhost/ff/User/myinfo" class=""><img src="<?=base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" /></a>
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
    </body>

    
  <script>
    function backurl() {
        <?php
            $page_url=current_url();
            $this->load->library('session');
            $this->session->set_userdata(array(
                                        'user_id'       => $user->uid,
                                        'username'      => $user->username,
                                        'groupid'       => $user->groupid,
                                        'date'          => $user->date_cr,
                                        'serial'        => $user->serial,
                                        'rec_id'        => $user->rec_id,
                                        'status'        => TRUE,
                                        'backurl'       => $page_url
                                )); 
        ?>
    }
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
  <script type="text/javascript">
    $(function(){
      $('aside.slide-wrapper').on('touchstart', 'li', function(e){
        $(this).addClass('current').siblings('li').removeClass('current');
      });
      
      $('a.slide-menu').on('click', function(e){
        // var wh = $('div.wrapper').height();
        var wh = $('body').height();
        var wh1 = $('body').height()-$('.user-panel').height();
        // console.log($('body').height());
        // console.log($('.user-panel').height());
        $('div.slide-mask').css('height', wh).show();
        $('aside.slide-wrapper').css('height', wh).addClass('moved');
        $('li.user_content').css('height', wh1).show();
      });
      
      $('div.slide-mask').on('click', function(){
        $('div.slide-mask').hide();
        $('aside.slide-wrapper').removeClass('moved');
      });
    });
  </script>
  

<!--   var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth; -->
</html>
