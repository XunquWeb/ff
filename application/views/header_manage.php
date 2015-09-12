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
    <link href="<?php echo base_url('css/base.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/user_info/account_info.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">

      <script src="<?php echo base_url('js/jquery-2.1.0.min.js')?>"></script>
<link href="<?php echo base_url('css/manage_act.css')?>" rel="stylesheet">
    

    <script src="<?php echo base_url('js/input_info/mobiscroll_06.js')?>" type="text/javascript"></script>

    <script src="<?php echo base_url('js/input_info/mobiscroll_07.js')?>" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/page-transition/component.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/page-transition/animations.css')?>" />
    <script src="<?php echo base_url('js/page-transition/modernizr.custom.js')?>"></script>
    <!-- <link rel="stylesheet" href="http://dreamsky.github.io/main/blog/common/init.css"> -->

  </head> 
  <body>     
      <nav class="nav_fix navbar navbar-default " id="nav_fix">
        <div class="container-fluid0 bc-main">
          <div class="navbar-header">
            <li class=""><a href="<?php echo base_url('act/manage_list/-1');?>" class="pull-left m-l-sm c-black"><span><i class="fa fa-angle-left c-white"></i> </span></a></li>
            <h4 class="c-white">约单报名情况</h4>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
<div id="event_attendees_thumbs">
    <table class="table table-bordered table-striped" style="width:100%;table-layout:fixed;">
        <thead>
            <tr style="background-color:white;">
                <th>名字</th><th>手机</th><th>学校</th><th>报名时间</th>
            </tr>
        </thead>
        <tbody id="e_a_thumb_body">
            <div class="model" style="display:none;">
                <tr class="e_a_data_0">
                    <td><span class="id" style="display:none;">123</span><span class="name"><?php echo $this->session->nname;?></span></td><td style="WORD-WRAP: break-word"><span class="phone"></span></td><td><span class="school"></span></td><td><span class="date"></span></td>
                </tr>
                <tr>
                    <td>验证消息</td><td colspan=3 style="WORD-WRAP: break-word"><span class="extra">发起人</span></td>
                </tr>
                <tr>
                    <td colspan=4 style="background-color:white;"></td>
                </tr>
            </div>
        </tbody>
    </table>
</div>
      <div id="btm">
        <span class="img" ></span>
        <span>亲，已经到底了哦~</span>
      </div>
  </body>
  <script>
    $(function(){
        var slist = '<?php echo urlencode(json_encode($list));?>';
        //alert(slist);
        $list = eval(decodeURIComponent(slist));
        $html_temp0 = $("#e_a_thumb_body tr").eq(0).clone();
        $html_temp1 = $("#e_a_thumb_body tr").eq(1).clone();
        $html_temp2 = $("#e_a_thumb_body tr").eq(2).clone();
        $.each($list,function(n,value){
                          $html_temp0.find('.name').text(value['am_name']);
                          $html_temp0.find('.phone').text(value['am_phone']);
                          $html_temp0.find('.school').text(value['am_college']);
                          $html_temp0.find('.date').text(value['am_jointime']);
                          $html_temp0.find('.id').text(value['u_id']);
                          $html_temp1.find('.extra').text(value['am_extra']);
                          $("#e_a_thumb_body").append($html_temp0);
                          $("#e_a_thumb_body").append($html_temp1);
                          $("#e_a_thumb_body").append($html_temp2);

        });

        $('.e_a_data_0').bind("click",function(){
          $url = $(this).find(".id").text();
          window.location.href="<?php echo base_url('user/myinfo/')?>"+"/"+$url;
        });


    });
  </script>
</html>
