<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/submit_act.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/clockpicker.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/datepicker.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('js/clockpicker.js')?>"></script>
    <script src="<?php echo base_url('js/datepicker.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>
  </head>




    <form class="create-event " id="create_event" method="post" action="/myevent/SaveQEvent" data-abide="" prevent-submit="true" novalidate="">
    		<input type="hidden" value="0" name="Id" id="activity_id">
            <input id="Category" name="Category" type="hidden" value="99">
            <input id="Type" name="Type" type="hidden" value="1">
            <input id="CreateBy" name="CreateBy" type="hidden" value="9302036809375">
            <input id="Setting_Province" name="Setting.Province" type="hidden" value="上海">
            <input id="City" name="City" type="hidden" value="上海">
            <input id="Setting_ShowMembers" name="Setting.ShowMembers" type="hidden" value=""> 
            <input id="Setting_Summary" name="Setting.Summary" type="hidden" value="">
            <input id="Setting_IsPrivate" name="Setting.IsPrivate" type="hidden" value=""> 
            <input id="Tag" name="Tag" type="hidden" value="">
            <input id="Description" name="Description" type="hidden" value="">
            
            <!-- <div class="small tips">
                <span class="icon-alert"></span>
                提示：发布违法、反动互动信息或者冒用他人、组织名义发起互动，将依据记录提交公安机关处理
            </div> -->
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="活动主题" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="Title" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group datetime">
                <span class="icon-time-md"></span>
                <input type="text" class="form-control" placeholder="活动开始时间" required="" data-validation-message="请输入活动开始时间" data-validation-type="warning" name="Start" value="2015-08-13 08:00:00" id="mobiscroll1438876656972" readonly="">
                <!-- <div class="tips sr-only">输入活动开始时间</div> -->
            </div>
            <div class="form-group">
                <span class="icon-city-md"></span>
                <input type="text" id="mobiscroll1438876656974_dummy" class="form-control" placeholder="" readonly="">
                </input>

            </div>
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="姓名" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="Title" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="手机" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="Title" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="学校" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="Title" value="" maxlength="100" data-invalid="">
            </div>
            <div class="event-edit">
                <div class="placeholder"><span></span><p>报名的验证消息，以供发起者审核</p></div>
                <div class="form-control textarea" contenteditable="" data-validation-message="活动详情不能少于5个字数" data-validation-type="warning" data-abide-validator="minLength" name="Description">
                    
                </div>
                
            </div>
            <!--<div class="text-center text-muted small">如需设置更多内容请下载APP～</div>-->
            <input id="btn_create_event" type="submit" class="btn btn-primary btn-block btn-lg" onclick="javascript:saveEvent();" value="确定发布">
        </form>

<script>
    $(".event-edit .textarea").bind('input propertychange', function() {
        var word = $(".event-edit .textarea").text();
        if (word != ''){
            $(".event-edit .placeholder p").addClass('display-none');
        }
        else 
            $(".event-edit .placeholder p").removeClass('display-none');
    });
</script>
