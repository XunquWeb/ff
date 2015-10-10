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
    <link href="<?php echo base_url('css/base.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/user_info/account_info.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/fontawesome/css/font-awesome.css')?>" rel="stylesheet">

      <script src="<?php echo base_url('js/jquery-2.1.0.min.js')?>"></script>

    <!--input_info  -->
    <script src="<?php echo base_url('js/input_info/mobiscroll_02.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/input_info/mobiscroll_04.js')?>" type="text/javascript"></script>
    <link href="<?php echo base_url('css/input_info/mobiscroll_02.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('css/input_info/mobiscroll.css')?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('js/input_info/mobiscroll.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/input_info/mobiscroll_03.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/input_info/mobiscroll_05.js')?>" type="text/javascript"></script>
    <link href="<?php echo base_url('css/input_info/mobiscroll_03.css')?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('js/input_info/mobiscroll_school.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/input_info/mobiscroll_checkin.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/input_info/mobiscroll_major.js')?>" type="text/javascript"></script>
    
    <script src="<?php echo base_url('js/input_info/mobiscroll_06.js')?>" type="text/javascript"></script>

    <script src="<?php echo base_url('js/input_info/mobiscroll_07.js')?>" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/page-transition/component.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/page-transition/animations.css')?>" />
    <script src="<?php echo base_url('js/page-transition/modernizr.custom.js')?>"></script>
    <!-- <link rel="stylesheet" href="http://dreamsky.github.io/main/blog/common/init.css"> -->
  <body>

  </head>
  <div id="mask" style="display:none;"></div>
  <div id="pt-main" class="pt-perspective">
    <div class="pt-page pt-page-1">
    
      <nav class="nav_fix navbar navbar-default " id="nav_fix">
        <div class="container-fluid0 bc-main">
          <div class="navbar-header">
            <li class=""><a href="<?php echo base_url('User/myinfo/').'/'.$this->session->userdata('id');?>" class="pull-left m-l-sm c-black"><span><i class="fa fa-angle-left c-white"></i> </span></a></li>
            <h4 class="c-white">编辑资料</h4>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="content-wrap">
        <section>
          <form action="<?php echo base_url("user/myinfo_edit") ?>" method="post" enctype="multipart/form-data">
            <div class="padder">     
                <div class="">
                  <div class="panel">
                    <!-- <div class="dl-menuwrapper dl-menu-main">
                      <ul class="dl-menu">
                        <li data-animation="1" index="1">
                          <a href="#" class="c-black flaunt">&nbsp;&nbsp;艺术家</a>
                        </li>
                      </ul>
                    </div> -->
                    <div class="panel-body dl-menuwrapper dl-menu-main"  >
                      <div class="main_info " >
                        <input class="replace-input" name="file" id="replace_input" onchange="replace(this)" style="display:none;" type="file" ></input>;
                        <figure class="m-b inline p" id="user_avatar" onclick="$('#replace_input').click()">
                          <a href="#" class="">
                            <img src="<?php echo base_url('image/photo/').'/'.$this->session->id;?>" onerror="this.src='../../image/photo_default.gif'" alt="" style="display: inline-block" class="img-responsive img-circle" id="user_img" />
                            <p><span class="badge badge-green"><i class="fa fa-camera"></i></span></p>
                          </a>
                        </figure>
                        <ul class="nav nav-pills nav-stacked nav-sided pull-right">
                        <li >
                          <input class="c-black"  value="<?php echo $this->session->nname;?>" name="nickname" placeholder="未填写" required></i></input>
                        </li>
                        <li>
                          <input name="signature" value="<?php echo $this->session->sign;?>" placeholder="未填写"></input>
                        </li>                                                                         
                      </div>
                      <ul class="nav nav-pills more_info dl-menu">
                          <li>
                          <p><span>性别</span></p>
                          <input id="info_sex" name="info_sex"  placeholder ="未填写"  class="bounceOutUp" value="<?php echo $sex;?>">
                            <!-- <span class="meta-sex c-blue"><i class="fa fa-mars"></i></span> -->
                          </input>
                          </li>
                          <li>
                          <p><span>学校</span></p>
                          <input id="info_school" name="info_school"  placeholder ="未填写"  class="bounceOutUp" value="<?php echo $college;?>">
                            <!-- <span class="meta-sex c-blue"><i class="fa fa-mars"></i></span> -->
                          </input>
                          </li>
                          <li>
                            <p><span>兴趣爱好</span></p>
                            <input id="info_hobby" name="info_hobby" value="<?php echo $hobby;?>" placeholder ="未填写"></input>
                          </li>
<!--
                          <li data-animation="1" index="1">
                            <p><span>兴趣标签</span></p>
                            <a href="#" class="c-black info_flaunt">&nbsp;&nbsp;艺术家</a>
                            <span><i class="fa fa-angle-right pull-right c-grey"></i> </span>
                          </li>
                          <li data-animation="1" index="2">
                            <p><span>活跃地</span></p>
                            <a href="#" class="c-black">&nbsp;&nbsp;上海</a>
                            <span><i class="fa fa-angle-right pull-right c-grey"></i> </span>
                          </li>
-->
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="panel">
                    <!-- <div class="dl-menuwrapper dl-menu-main">
                      <ul class="dl-menu">
                        <li data-animation="1" index="1">
                          <a href="#" class="c-black flaunt">&nbsp;&nbsp;艺术家</a>
                        </li>
                      </ul>
                    </div> -->
                    <div class="panel-body dl-menuwrapper dl-menu-main"  >
                      <ul class="nav nav-pills more_info dl-menu">
                          <div class="panel-header">
                            <div class="caption"><span><i class="fa fa-user c-main"></i></span>更多信息</div> 
                          </div>
                          <li>
                            <p><span>星座</span></p>
                            <input id="info_date"  name="info_date"  placeholder ="未填写" href="" value="<?php echo $constellation; ?>" data-toggle="tab" class="bounceOutUp"></input>
                          </li>
                          <li>
                            <p><span>专业</span></p>
                            <input id="info_major"  name="info_major" value="<?php echo $major;?>" placeholder ="未填写"  ></input>
                          </li>
                          <li>
                          <p><span>情感状态</span></p>
                          <input id="info_state" name="info_state" placeholder ="未填写" value="<?php echo $estate; ?>"  class="bounceOutUp" >
                            <!-- <span class="meta-sex c-blue"><i class="fa fa-mars"></i></span> -->
                          </input>
                          </li>
                          <li>
                            <p><span>家乡</span></p>
                            <input id="info_home" name="info_home" value="<?php echo $home;?>" placeholder ="未填写" ></input>
                          </li>
                          <li>
                            <p><span>移动电话</span></p>
                            <input id="info_contact" name="info_contact" value="<?php echo $phone;?>" placeholder ="未填写"  ></input>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary"  type="submit"  >确认提交</button>
                <!--
                <div class="">
                  <div class="panel">
                    <div class="panel-body">
                      <ul class="nav nav-pills nav-stacked more_info">
                        <div class="panel-header">
                          <div class="caption"><span><i class="fa fa-user c-main"></i></span>个人成长</div> 
                        </div>
                        <li>
                          <p><span><!-- <i class="fa fa-institution bc-blue"></i> --> <!--等级状态</span></p>
                          <a href="" class=" level_info c-black" ><span class="meta-rank pull-left m-t m-l-sm">Lv.9</span></a>
                        </li>
                        <li>
                          <p><span><!-- <i class="fa fa-level-up bc-blue"></i> --><!--信誉评分</span></p>
                          <a href="#" class=" star_info"><span class="space"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></a>
                        </li>
                      </ul>
                      
                    </div>
                  </div>
                -->
                </div>
            </div>
            
          </form>
          </section>

      </div>
    </div>
    <div class="pt-page pt-page-2 pt-info">
      <nav class="nav_fix navbar navbar-default " id="nav_fix">
        <div class="container-fluid0 bc-main dl-menuwrapper dl-menu-main">
          <ul class="navbar-header dl-menu">
            <li data-animation="2" index="4" class="m-l-sm"><a href="" class="pull-left m-l-sm c-black"><span><i class="fa fa-angle-left c-white"></i> </span></a></li>
            <h4 class="c-white">自我标榜</h4>
          </ul>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="content-wrap">
      <section>
          <div class="padder">
              <div class="">
                <div class="panel">
                  <div class="panel-heading">来来来，我们来标榜一下自己（5/6）</div>
                  <div class="panel-body pull-left">
                    <div class="panel-btn">
                      <li class="btn-select-group">
                        <button type="button" class="btn btn-select btn-outlined">艺术家</button>
                        <button type="button" class="btn btn-select btn-outlined">诗人</button>
                        <button type="button" class="btn btn-select btn-outlined">高傲的死宅</button>
                        <button type="button" class="btn btn-select btn-outlined">无敌的学渣</button>
                        <button type="button" class="btn btn-select btn-outlined">我是哈哈哈</button>
                        <button type="button" class="btn btn-select btn-outlined">请叫我齐天大圣！</button>
                        <button type="button" class="btn btn-select btn-outlined">请叫我齐天大圣！大圣！大圣！大圣！大圣！大圣！大圣！大圣！大圣！大圣！大圣！大圣！大圣！</button>
                      </li>
                      <button type="submit" class="btn btn-submit" />+ 添加标签</button>
                    </div>
                  </div>
                  <div id="panel-mask"></div>
                  <div id="panel-select-bounce" class="animated bounceIn">
                    <h4 class="sefl-set">自定义标签</h4>
                    <input type="text" class="label-plus">
                    <div>
                      <button class="label-confirm">确认</button>
                      <button class="label-cancel">取消</button>
                    </div>
                  </div>
                </div>
              </div>

          </div>
         </form>
        </section>
    </div>

    <div class="pt-page pt-page-3 pt-info"><h1><span>A collection of</span>页面切换效果</h1></div>

    <div class="pt-page pt-page-4 pt-info"><h1><span>A collection of</span>页面切换效果</h1></div>
</div>


    


    </body>

    <script type="text/javascript">
    $(function(){
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
              startYear: currYear - 50, //开始年份
              endYear: currYear + 10 //结束年份
        };

        $("#info_date").mobiscroll($.extend(opt['date'], opt['default']));
        });

        // $(".dw-persp").top();

        $("#info_date").click(function(){
          $('.dw-time .dw-persp').fadeIn(300);
          $('.dw-time .dwo').fadeIn(300,function(){
            $('.dw-time .dwbg').removeClass('bounceInDown').addClass('bounceOutUp').fadeIn();
            });
          

          var wh = $('body').height();
          $('#mask').css('height', wh).fadeIn(300);
          var wh1 = $(window).height()*0.3;
          wh2 = 210;
          wh3 = wh1 < wh2 ? wh2 : wh1;
              var ma1 = $(window).height()-wh3;
              $('.dw-time div.dw').css('height', wh3).css('margin-top',ma1);
          // console.log('1');
          // console.log($('body').css("z-index"));
        });



        $('#mask').click(function(){
          $('.dw-time .dw-persp').fadeOut(300);
          $('.dw-time .dwo').fadeOut(300,function(){
            $('.dw-time .dwbg').removeClass('bounceOutUp').addClass('bounceInDown').fadeOut();
          });
          $('#mask').css('height', 0).fadeOut(300);

          // console.log($('.dwwl1 .dw-sel').attr("data-val"));

          // console.log($('.dwwl2 .dw-sel').attr("data-val"));

          // console.log('ahaha');
          // console.log($('body').css("z-index"));
          // console.log($('body').css("z-index"));
        });
      });
    </script>



    <script type="text/javascript">
    $(function(){

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
          startYear: currYear - 0, //开始年份
          endYear: currYear + 1 //结束年份
        };

        $("#info_sex").mobiscroll1($.extend(opt['date'], opt['default']));
      });

        // $(".dw-persp").top();


        $("#info_sex").click(function(){
          $('.dw-sex .dw-persp').fadeIn(300);
          $('.dw-sex .dwo').fadeIn(300,function(){
            $('.dw-sex .dwbg').removeClass('bounceInDown').addClass('bounceOutUp').fadeIn();
            });

          

          var wh = $('body').height();
          $('#mask').css('height', wh).fadeIn(300);
          var wh1 = $(window).height()*0.3;
          wh2 = 210;
          wh3 = wh1 < wh2 ? wh2 : wh1;
              var ma1 = $(window).height()-wh3;
              $('.dw-sex div.dw').css('height', wh3).css('margin-top',ma1);
          // console.log('1');
          console.log($("#info_sex").val());
        });



        $('#mask').click(function(){
          $('.dw-sex .dw-persp').fadeOut(300);
          $('.dw-sex .dwo').fadeOut(300,function(){
            $('.dw-sex .dwbg').removeClass('bounceOutUp').addClass('bounceInDown').fadeOut();
          });
          $('#mask').css('height', 0).fadeOut(300);

          // console.log($('.dwwl1 .dw-sel').attr("data-val"));

          // console.log($('.dwwl2 .dw-sel').attr("data-val"));

          // console.log('ahaha');
          // console.log($('body').css("z-index"));
          // console.log($('body').css("z-index"));
        });

      

      });
    </script>

    <script type="text/javascript">
    $(function(){

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
              startYear: currYear - 0, //开始年份
              endYear: currYear + 1 //结束年份
        };

        $("#info_checkin").mobiscrollch($.extend(opt['date'], opt['default']));
        });

        // $(".dw-persp").top();


        $("#info_checkin").click(function(){
          $('.dw-time .dw-persp').fadeIn(300);
          $('.dw-time .dwo').fadeIn(300,function(){
            $('.dw-time .dwbg').removeClass('bounceInDown').addClass('bounceOutUp').fadeIn();
            });

          

          var wh = $('body').height();
          $('#mask').css('height', wh).fadeIn(300);
          var wh1 = $(window).height()*0.3;
          wh2 = 210;
          wh3 = wh1 < wh2 ? wh2 : wh1;
              var ma1 = $(window).height()-wh3;
              $('.dw-time div.dw').css('height', wh3).css('margin-top',ma1);
          // console.log('1');
          console.log($("#info_checkin").val());
        });



        $('#mask').click(function(){
          $('.dw-time .dw-persp').fadeOut(300);
          $('.dw-time .dwo').fadeOut(300,function(){
            $('.dw-time .dwbg').removeClass('bounceOutUp').addClass('bounceInDown').fadeOut();
          });
          $('#mask').css('height', 0).fadeOut(300);

          // console.log($('.dwwl1 .dw-sel').attr("data-val"));

          // console.log($('.dwwl2 .dw-sel').attr("data-val"));

          // console.log('ahaha');
          // console.log($('body').css("z-index"));
          // console.log($('body').css("z-index"));
        });

      

      });
    </script>

    <script type="text/javascript">
    $(function(){

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
              startYear: currYear - 0, //开始年份
              endYear: currYear + 1 //结束年份
        };

        $("#info_school").mobiscrollsc($.extend(opt['date'], opt['default']));
        });

        // $(".dw-persp").top();


        $("#info_school").click(function(){
          $('.dw-school .dw-persp').fadeIn(300);
          $('.dw-school .dwo').fadeIn(300,function(){
            $('.dw-school .dwbg').removeClass('bounceInDown').addClass('bounceOutUp').fadeIn();
            });

          

          var wh = $('body').height();
          $('#mask').css('height', wh).fadeIn(300);
          var wh1 = $(window).height()*0.3;
          wh2 = 210;
          wh3 = wh1 < wh2 ? wh2 : wh1;
              var ma1 = $(window).height()-wh3;
              $('.dw-school div.dw').css('height', wh3).css('margin-top',ma1);
          // console.log('1');
          console.log($("#info_school").val());
        });



        $('#mask').click(function(){
          $('.dw-school .dw-persp').fadeOut(300);
          $('.dw-school .dwo').fadeOut(300,function(){
            $('.dw-school .dwbg').removeClass('bounceOutUp').addClass('bounceInDown').fadeOut();
          });
          $('#mask').css('height', 0).fadeOut(300);

          // console.log($('.dwwl1 .dw-sel').attr("data-val"));

          // console.log($('.dwwl2 .dw-sel').attr("data-val"));

          // console.log('ahaha');
          // console.log($('body').css("z-index"));
          // console.log($('body').css("z-index"));
        });

      

      });
    </script>

     <script type="text/javascript">
    $(function(){

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
              startYear: currYear - 0, //开始年份
              endYear: currYear + 3 //结束年份
        };

        $("#info_state").mobiscroll2($.extend(opt['date'], opt['default']));
        });

        // $(".dw-persp").top();


        $("#info_state").click(function(){
          $('.dw-state .dw-persp').fadeIn(300);
          $('.dw-state .dwo').fadeIn(300,function(){
            $('.dw-state .dwbg').removeClass('bounceInDown').addClass('bounceOutUp').fadeIn();
            });
          

          var wh = $('body').height();
          $('#mask').css('height', wh).fadeIn(300);
          var wh1 = $(window).height()*0.3;
          wh2 = 210;
          wh3 = wh1 < wh2 ? wh2 : wh1;
              var ma1 = $(window).height()-wh3;
              $('.dw-state div.dw').css('height', wh3).css('margin-top',ma1);
          // console.log('1');
          // console.log($('body').css("z-index"));
        });



        $('#mask').click(function(){
          $('.dw-state .dw-persp').fadeOut(300);
          $('.dw-state .dwo').fadeOut(300,function(){
            $('.dw-state .dwbg').removeClass('bounceOutUp').addClass('bounceInDown').fadeOut();
          });


          $('#mask').css('height', 0).fadeOut(300);

          // console.log($('.dwwl1 .dw-sel').attr("data-val"));

          // console.log($('.dwwl2 .dw-sel').attr("data-val"));

          // console.log('ahaha');
          // console.log($('body').css("z-index"));
          // console.log($('body').css("z-index"));
        });

      

      });
    </script>  

    <script src="<?php echo base_url('js/page-transition/jquery.dlmenu.js')?>"></script>
    <script src="<?php echo base_url('js/page-transition/pagetransitions.js')?>"></script>


    <script type="text/javascript">
      $(function(){
        var index = 0;
        var info_flaunt = $('.pt-page-1 .info_flaunt').val();
        console.log($('.pt-page-1 .info_flaunt').html());



        $('.pt-page-2 .panel-btn .btn-submit').click(function(){
          $('#panel-mask').fadeIn(300);
          $('#panel-select-bounce').fadeIn(300);

          var pt2h = $('.pt-page-2 .panel').height();
          var pt2h1 = pt2h*0.2; 
          var pt2h2 = 180;
          var pt2h3 = pt2h1 < pt2h2 ? pt2h2 : pt2h1;
          $('#panel-select-bounce').css('height',pt2h3);

          var pt2w = $('.pt-page-2 .panel').width();
          var pt2w1 = pt2w*0.4; 
          var pt2w2 = 300;
          var pt2w3 = pt2w1 < pt2w2 ? pt2w2 : pt2w1;
          var pt2ma2 = (pt2w - pt2w3)/2;
          $('#panel-select-bounce').css('margin-left', pt2ma2).css('width',pt2w3);
        });
        
        //¹Ø±Õµ¯´°
        $('#panel-mask').click(function(){
          $('#panel-mask').fadeOut(300);
          $('#panel-select-bounce').fadeOut(300);
        });

        $('#panel-select-bounce .label-confirm').click(function(){
          // console.log($('#panel-select-bounce .label-plus').val());
          var insert = $('#panel-select-bounce .label-plus').val();
          if(!insert){
            $('#panel-select-bounce .label-plus').val("");
            $('#panel-mask').fadeOut(300);
            $('#panel-select-bounce').fadeOut(300);
          }
          else{
            var chtml = "";
            chtml += '<button type="button" class="btn btn-select btn-outlined">';
            chtml += insert;
            chtml += '</button>';
            chtml = $('.panel-btn .btn-select-group').html() + chtml;
            $('.panel-btn .btn-select-group').html(chtml);
            $('#panel-select-bounce .label-plus').val("");
            $('#panel-mask').fadeOut(300);
            $('#panel-select-bounce').fadeOut(300);
            console.log(insert.length);
          }
          $('.panel-btn .btn-select-group .btn').click(function(){
            if($(this).hasClass('btn-selected')){
              $(this).removeClass('btn-selected');
              // console.log('1');
            }
            else{
              $(this).addClass('btn-selected');
              // console.log('2');
            }
          });
        });

        $('#panel-select-bounce .label-cancel').click(function(){
          $('#panel-select-bounce .label-plus').val("");
          $('#panel-mask').fadeOut(300);
          $('#panel-select-bounce').fadeOut(300);
        });

        // console.log($('.panel-btn .btn-select-group button').length);

        $('.panel-btn .btn-select-group .btn').click(function(){
          if($(this).hasClass('btn-selected')){
            $(this).removeClass('btn-selected');
            // console.log('1');
          }
          else{
            $(this).addClass('btn-selected');
            // console.log('2');
          }
        });

        // console.log($('.panel-btn .btn-select-group').hasClass('btn-select-group'));
      });
    </script>

    <script>
      function replace(input){
        var file = input.files[0];

        if(file.type.indexOf("image")==0){
          var reader = new FileReader();
          reader.readAsDataURL(file);
          reader.onload = (function(e){
            $('#user_avatar img').attr('src',e.target.result);
            canvas = document.createElement("canvas");
            canvas.width = 80;
            canvas.height = 80;
            var img = document.getElementById('user_img');
            var height = $('#user_avatar img')[0].naturalHeight;
            var width = $('#user_avatar img')[0].naturalWidth;
            if(height>width){sw = width;sh = width;sx = 0;sy = (height - width)/2;}
            else{sw = height;sh = height;sx = (width-height)/2;sy = 0;}
            var context = canvas.getContext("2d");
            context.drawImage(img, sx, sy, sw, sh, 0, 0, 80, 80);
            var imageData = canvas.toDataURL('image/png');
            $('#user_avatar img').attr('src',imageData);
          });
        }
        else{
          alert('图片格式');
        }
      }
    </script>









<!--   var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth; -->
</html>
