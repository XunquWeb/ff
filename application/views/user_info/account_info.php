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
    <link href="<?=base_url('css/base.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/user_info/account_info.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">

      <script src="<?=base_url('js/jquery-2.1.0.min.js')?>"></script>

    <!--input_info  -->
    <script src="<?=base_url('js/input_info/mobiscroll_02.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('js/input_info/mobiscroll_04.js')?>" type="text/javascript"></script>
    <link href="<?=base_url('css/input_info/mobiscroll_02.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('css/input_info/mobiscroll.css')?>" rel="stylesheet" type="text/css">
    <script src="<?=base_url('js/input_info/mobiscroll.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('js/input_info/mobiscroll_03.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('js/input_info/mobiscroll_05.js')?>" type="text/javascript"></script>
    <link href="<?=base_url('css/input_info/mobiscroll_03.css')?>" rel="stylesheet" type="text/css">




  </head>
    <nav class="nav_fix navbar navbar-default " id="nav_fix">
      <div class="container-fluid0 bc-main">
        <div class="navbar-header">
          <a href="http://localhost/ff/User/myinfo" class="pull-left m-l-sm c-black"><span><i class="fa fa-angle-left c-white"></i> </span></a>
          <h4 class="c-white">编辑资料</h4>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        </div><!-- /.navbar-collapse -->

          
      </div><!-- /.container-fluid -->

    </nav>

    <div class="content-wrap">
      <section>
          <div class="padder">
              <div class="">
<!--                   <div class="portlet box">
                    <div class="portlet-header">
                      <div class="caption"><span><i class="fa fa-user"></i></span>个人信息</div> 
                    </div>
                    <div class="portlet-body">
                      <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td width="30%">真实姓名</td>
                                                <td>安嘉珺</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">出生日期</td>
                                                <td>（未填写）</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">学校</td>
                                                <td>上海交通大学</td>
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
                                                <td width="30%">入学年份</td>
                                                <td> 上海交通大学</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">恋爱状态</td>
                                                <td>保密</td>
                                            </tr>
                                        </tbody>
                                    </table>      
                        
                    </div>

                  </div> -->
                          <div class="padder">
              <div class="">
                <div class="panel">
                  <div class="panel-body">
                    <!-- <h4 class="circle"><span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">选择圈子</span> -->
                    <div class="main_info ">
                      <figure class="m-b inline p">
                        <a href="http://localhost/ff/User/myinfo" class="">
                          <img src="<?=base_url('image/users/avatar/default/default10.jpg')?>" alt="" style="display: inline-block" class="img-responsive img-circle" />
                          <p><span class="badge badge-green"><i class="fa fa-camera"></i></span></p>
                        </a>
                      </figure>
                      <ul class="nav nav-pills nav-stacked nav-sided pull-right">
                      <li >
                        <input class="c-black"  value="" placeholder="DannyJay"></i></input>
                      </li>
                      <li>
                        <a href="#tab-account-setting" class="c-grey">&nbsp;&nbsp;15021132720</a>
                      </li>                                                                         
                    </div>
                    <ul class="nav nav-pills more_info">
                      <li >
                        <p><span>标榜</span></p>
                        <a href="" data-toggle="tab" class="c-black">&nbsp;&nbsp;艺术家</a>
                      </li>
                      <li>
                        <p><span>星座</span></p>
                        <input id="info_date"  value ="摩羯座" href="" readonly="readonly" data-toggle="tab" class="c-black pull-right"></input>
                      </li>
                      <li>
                        <p><span>性别</span></p>
                        <a href="" data-toggle="tab" class="c-black">&nbsp;&nbsp;男
                          <span class="meta-sex c-blue"><i class="fa fa-mars"></i></span>
                        </a>
                      </li>
                      <li>
                        <p><span>情感</span></p>
                        <a href="" data-toggle="tab" class="c-black">&nbsp;&nbsp;你猜</a>
                      </li>
                      <li>
                        <p><span>活跃地</span></p>
                        <a href="" data-toggle="tab" class="c-black">&nbsp;&nbsp;上海</a>
                      </li>
                      <li>
                        <p><span>兴趣标签</span></p>
                        <a href="" data-toggle="tab" class="c-black">&nbsp;&nbsp;出行 旅游</a>
                      </li>

                      <!-- <li >
                        <a href="#tab-profile-setting" data-toggle="tab"><i class="fa fa-user c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;帐号信息</a>
                      </li>
                      <li>
                        <a href="#tab-account-setting" data-toggle="tab"><i class="fa fa-qrcode c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;二维码</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-picture-o c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;相册</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-cube c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;收藏</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-graduation-cap c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;认证</a>
                      </li> -->
<!--                       <a href="" class="m-b-md inline-xm p">
                        <span class="occupation">职业</span>
                        <span class="answer">最近在听</span>
                      </a>
                      <a href="" class="m-b-md inline-xm p">
                        <span class="icon"><i class="fa fa-book bc-orange-sm"></i></span>
                        <span class="description">最近在读</span>
                      </a>
                      <a href="" class="m-b-md inline-xm p">
                        <span class="icon"><i class="fa fa-street-view bc-pink"></i></span>
                        <span class="description">加入的组</span>
                      </a> -->
                    </ul>
<!--                     <a href="" class="m-b-md inline p">
                      <span class="icon"><i class="icon fa fa-sitemap bc-blue"></i></span>
                      <span class="description">公司/学校</span>
                    </a>
                    <a href="" class="m-b-md inline p">
                      <span class="icon"><i class="icon fa fa-external-link bc-orange"></i></span>
                      <span class="description">其他</span>
                    </a> -->
                    
                  </div>
                </div>
              </div>
              <!-- <div class="">
                  <div class="portlet box">
                    <div class="portlet-header">
                      <div class="caption"><span><i class="fa fa-user"></i></span>个人信息</div> 
                    </div>
                    <div class="portlet-body">
                      <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td width="30%">真实姓名</td>
                                                <td>安嘉珺</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">出生日期</td>
                                                <td>（未填写）</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">学校</td>
                                                <td>上海交通大学</td>
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
                                                <td width="30%">入学年份</td>
                                                <td> 上海交通大学</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">恋爱状态</td>
                                                <td>保密</td>
                                            </tr>
                                        </tbody>
                                    </table>      
                        
                    </div>

                  </div>
                            
             </div> -->
              <div class="">
                <div class="panel">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked more_info">
                      <div class="panel-header">
                        <div class="caption"><span><i class="fa fa-user c-main"></i></span>个人成长</div> 
                      </div>
                      <li>
                        <p><span><!-- <i class="fa fa-institution bc-blue"></i> -->等级状态</span></p>
                        <a href="" class=" level_info c-black" ><span class="meta-rank pull-left m-t m-l-sm">Lv.9</span></a>
                      </li>
                      <li>
                        <p><span><!-- <i class="fa fa-level-up bc-blue"></i> -->信誉评分</span></p>
                        <a href="#" class=" star_info"><span class="space"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></a>
                      </li>
                      
                      <!-- <li >
                        <a href="#tab-profile-setting" data-toggle="tab"><i class="fa fa-user c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;帐号信息</a>
                      </li>
                      <li>
                        <a href="#tab-account-setting" data-toggle="tab"><i class="fa fa-qrcode c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;二维码</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-picture-o c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;相册</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-cube c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;收藏</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-graduation-cap c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;认证</a>
                      </li> -->
                    </ul>
                    
                  </div>
                </div>
              </div>
              <div class="">
                <div class="panel">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked personal_info">
                      <!-- <div class="panel-header"> -->
                        <!-- <div class="caption"><span><i class="fa fa-quote-left"></i></span>个性动向</div> 
                      </div>
                      <li>
                        <p><span> --><!-- <i class="fa fa-institution bc-blue"></i> --><!-- 个性签名</span></p> -->
                        <!-- <a href="" class=" level_info c-black" ><span class="meta-rank pull-left m-t m-l-sm">Lv.9</span></a>
                      </li>
                      <li>
                        <p><span> --><!-- <i class="fa fa-level-up bc-blue"></i> --><!-- 每日哔哔</span></p> -->
                       <!--  <a href="#" class=" star_info"><span class="space"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></a>
                      </li> -->
                      
                      <!-- <li >
                        <a href="#tab-profile-setting" data-toggle="tab"><i class="fa fa-user c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;帐号信息</a>
                      </li>
                      <li>
                        <a href="#tab-account-setting" data-toggle="tab"><i class="fa fa-qrcode c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;二维码</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-picture-o c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;相册</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-cube c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;收藏</a>
                      </li>
                      <li>
                        <a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-graduation-cap c-black"></i>&nbsp;&nbsp;&nbsp;&nbsp;认证</a>
                      </li> -->
                      <li >
                        <a href="http://localhost/ff/User/account_info" class="c-black"><i class="fa fa-quote-left bc-red"></i>&nbsp;&nbsp;&nbsp;&nbsp;个性签名</a>
                      </li>
                      <li>
                        <a href="#tab-account-setting" class="c-black"><i class="fa fa-bookmark bc-blue-xm"></i>&nbsp;&nbsp;&nbsp;&nbsp;我的闲扯</a>
                      </li>
                      
                    </ul>
                    
                  </div>
                </div>
              </div>
              <div class="">
                <div class="panel">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked .others_info">
                      <div class="panel-header">
                        <div class="caption"><span><i class="fa fa-puzzle-piece c-main"></i></span>身份验证</div> 
                      </div>
                      <a href="" class="m-b-md inline-sm p">
                        <span class="icon"><i class="icon fa fa-qq c-blue borc-blue"></i></span>
                      </a>
                      <a href="" class="m-b-md inline-sm p">
                        <span class="icon"><i class="icon fa fa-wechat c-green borc-green"></i></span>
                      </a>
                      <!-- <a href="" class="m-b-md inline-sm p">
                        <span class="icon"><i class="icon fa fa-weibo c-orange borc-orange"></i></span>
                      </a>
                      <a href="" class="m-b-md inline-sm p">
                        <span class="icon"><i class="icon fa fa-renren c-pink borc-pink"></i></span>
                      </a> -->
                      <a href="" class="m-b-md inline-sm p">
                        <span class="icon"><i class="icon fa fa-weibo c-default borc-default"></i></span>
                      </a>
                      <a href="" class="m-b-md inline-sm p">
                        <span class="icon"><i class="icon fa fa-renren c-default borc-default"></i></span>
                      </a>
                    </ul>
                    
                  </div>
                </div>
              </div>

          </div>
                            
             </div>

          </div>
        </section>



      
    </div>

    //   <script type="text/javascript">
    //     $(function () {
    //   var currYear = (new Date()).getFullYear();  
    //   var opt={};
    //   opt.timer = {preset: '1000'};
    //   opt.date = {preset : 'date'};
    //   opt.datetime = {preset : 'datetime'};
    //   opt.time = {preset : 'time'};
    //   opt.default = {
    //     theme: 'android-ics light', //皮肤样式
    //         display: 'modal', //显示方式 
    //         mode: 'scroller', //日期选择模式
    //     dateFormat: 'yyyy-mm-dd',
    //     lang: 'zh',
    //     showNow: true,
    //     nowText: "今天",
    //         startYear: currYear - 10, //开始年份
    //         endYear: currYear + 10 //结束年份
    //   };

    //     $("#info_date").mobiscroll($.extend(opt['timer'],opt['date'], opt['default']));
    //     });
    // </script>


    



    <script type="text/javascript">
        $(function () {
      var currYear = (new Date()).getFullYear();  
      var opt={};
      opt.date = {preset : 'date'};
      opt.datetime = {preset : 'datetime'};
      opt.time = {preset : 'time'};
      opt.default = {
        theme: 'android-ics light', //皮肤样式
            display: 'modal', //显示方式 
            mode: 'scroller', //日期选择模式
        dateFormat: 'yyyy-mm-dd',
        lang: 'zh',
        showNow: true,
        nowText: "今天",
            startYear: currYear - 10, //开始年份
            endYear: currYear + 10 //结束年份
      };

        $("#info_date").mobiscroll($.extend(opt['date'], opt['default']));
        });
    </script>






<!--   var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth; -->
</html>
