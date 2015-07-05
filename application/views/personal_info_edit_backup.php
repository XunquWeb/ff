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
		<link href="<?=base_url('css/submit_act.css')?>" rel="stylesheet">
		<link href="<?=base_url('css/personal_info_edit.css')?>" rel="stylesheet">
		<link href="<?=base_url('css/personal_info.css')?>" rel="stylesheet">
		<link href="<?=base_url('css/clockpicker.css')?>" rel="stylesheet">
	    <link href="<?=base_url('css/datepicker.css')?>" rel="stylesheet">
		<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
	    <script src="<?=base_url('js/datepicker.js')?>"></script>
	</head>
	<div class="info_edit_topbox">
		<div class="info_edit_title">
			<h4>我的资料</h4>
		</div>
		<a class="info_back" href="#"><img src="<?=base_url('image/left_icon.png')?>"></span></a>
	</div>

	<div>
		基本资料（必填）
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" >我的昵称<span>*</span></label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="昵称（不超过7个字）" maxlength="7" >
		</div> 
	</div> 
	<div class="form-group">
		<label class="control-label col-sm-2" >真实姓名<span>*</span></label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="真实姓名" maxlength="7" >
		</div> 
	</div> 
	<div class="form-group">
		<label class="control-label col-sm-2" >性别<span>*</span></label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="" maxlength="15" >
		</div> 
	</div>  
	<div class="form-group">
		<label class="control-label col-sm-2" >个性签名<span>*</span></label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="一句话描述自己～" maxlength="15" >
		</div> 
	</div>  
	<div>
		More
	</div> 

	<div class="form-group">
		<label class="control-label col-sm-2" >专业</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="名称（不超过15个字）" maxlength="15" >
		</div> 
	</div> 
	<div class="form-group">
		<label class="control-label col-sm-2" >社团或学生工作</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="名称（不超过15个字）" maxlength="15" >
		</div> 
	</div> 
	<div class="form-group">
		<label class="control-label col-sm-2" >家乡</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="名称（不超过15个字）" maxlength="15" >
		</div> 
	</div>  
	<div class="form-group">
		<label class="control-label col-sm-2" >情感状态</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" name="personal_info" id="activity_name"  placeholder="名称（不超过15个字）" maxlength="15" >
		</div> 
	</div>  
	<div class="form-group">
		<label for="dtp_input2" class="col-md-2 col-sm-2 control-label">出生日期</label>
		<div class="col-md-8 col-sm-8">
		  <div class="input-group date form_datetime controls" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input2" >
		    <input class="form-control" size="20" type="text" name="end_time"  placeholder="出生日期" value="" id="birthday">
		    <span class="input-group-addon"><label for="birthday" class="glyphicon glyphicon-th"></label></span>
		  </div>
		</div>
	</div>

	<script>
        $('#birthday').datepicker({
          format: 'yyyy-mm-dd',
                weekStart: 1,
                autoclose: true,
                todayBtn: 'linked',
                language: 'zh-CN'
         });
    </script>

    <script type="text/javascript">
        $('.clockpicker').clockpicker();
        $('.date').datepicker();
    </script>
</html>