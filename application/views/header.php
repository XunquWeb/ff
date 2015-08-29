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
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/header.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>
  </head>

  <body>
    
  
    <nav class="nav_fix navbar navbar-default " id="nav_fix">
      <div class="container-fluid">
        <div class="navbar-header">
          <a id="menu-toggle" href="#" class="slide-menu"><i class="fa fa-bars"></i></a>
          <a href="<?php echo base_url('user/message')?>" class="user_toggle user_message" >
            <i class="fa fa-bell fa-fw"></i>
            <span class="badge badge-green" id="msg_num">0</span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        </div><!-- /.navbar-collapse -->  
      </div><!-- /.container-fluid -->
      
      <!-- 侧边导航 -->
      <div class="slide-mask"></div>
      <aside class="slide-wrapper" style="position:fixed;">
              <ul id="side-menu" class="nav" style="position:relative">
                <li class="user-panel">
                  <div class="user-info">
                    <div style="margin-top:10px;" class="row">
                      <div class="col-xs-4 col-sm-4 text-center">
                        <figure>
                          <a href=<?php echo "\"" . base_url('User/myinfo') . "/" . $this->session->id . "\"";?> class=""><img src="<?php echo base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" /></a>
                        </figure>
                      </div>
                      <div class="col-xs-8 col-sm-8">
                        <h2><?php echo $this->session->nname;?></h2>
                        <figcaption class="ratings">
                          <p><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a>
                          </p>
                        </figcaption>
                        <!--
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
                        <p><?php echo $this->session->sign;?></p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="user_content">
                      <p class="user_inter"></p>
                      <a href="<?php echo base_url('index.php')?>" class="user_toggle" >
                        <!--<i class="fa fa-bell fa-fw"></i>
                        <span class="badge badge-blue">3</span>-->
                        <i class="fa fa-sitemap fa-fw"></i>
                        <span class="user_toggle_info">首页</span>
                      </a>
                      <p class="user_inter"></p>
                      <a href="<?php echo base_url('act/display')?>" class="user_toggle" >
                        <i class="fa fa-sitemap fa-fw"></i>
                        <!-- <span class="badge badge-green">3</span> -->
                        <span class="user_toggle_info">约单</span>
                      </a>
                      <p class="user_inter"></p>
                      <a href="#" class="user_toggle" >
                        <i class="fa fa-sitemap fa-fw"></i>
                        <!-- <span class="badge badge-green">3</span> -->
                        <span class="user_toggle_info">关注</span>
                      </a>                  
                      <p class="user_inter"></p>
                      <a href="<?php echo base_url('forum/public_forum')?>" class="user_toggle" >
                        <i class="fa fa-tachometer fa-fw"></i>
                        <!-- <span class="badge badge-green">3</span> -->
                        <span class="user_toggle_info">广场</span>
                      </a>
                      <p class="user_inter"></p>
                      <a href="<?php echo base_url('act/submit')?>" class="user_toggle" >
                        <i class="fa fa-tachometer fa-fw"></i>
                        <!-- <span class="badge badge-green">3</span> -->
                        <span class="user_toggle_info">发起</span>
                      </a>

                        <p class="user_inter_last"></p>
                        <a href="<?php echo base_url('user/logout')?>" class="user_toggle" >
                          <i class="fa fa-tachometer fa-fw"></i>
                          <!-- <span class="badge badge-green">3</span> -->
                          <span class="user_toggle_info">退出</span>
                        </a>
                        <p class="user_inter"></p>
                        <a href="<?php echo base_url('act/submit')?>" class="user_toggle" >
                          <i class="fa fa-tachometer fa-fw"></i>
                          <!-- <span class="badge badge-green">3</span> -->
                          <span class="user_toggle_info">设置</span>
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
  <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
  <script type="text/javascript">
    $(function(){
      $('aside.slide-wrapper.user_content').on('touchstart', 'li', function(e){
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
    function get_msg_num(){
      $.post(
        '<?php echo base_url('msg/msg_ajax')?>',
        function(data){
          $msg_arr=data.split('|');
          $msg_sum=0;
          for(i=0;i<=2;i++)
          {
            $msg_sum = $msg_sum + parseInt($msg_arr[i]);
          }
          $("#msg_num").html($msg_sum);
        }
      );
    }
/**/
    $(document).ready(function(){
      $.post(
        '<?php echo base_url('msg/msg_ajax')?>',
        function(data){
          $msg_arr=data.split('|');
          $msg_sum=0;
          for(i=0;i<=2;i++)
          {
            $msg_sum = $msg_sum + parseInt($msg_arr[i]);
          }
          $("#msg_num").html($msg_sum);
        }
      );
      setInterval(get_msg_num, 60000);  
    }); 
/**/
  </script>
  

<!--   var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth; -->
</html>
