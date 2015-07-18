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
		<a class="info_back" href="<?=base_url('user/myinfo')?>"><img src="<?=base_url('image/left_icon.png')?>"></span></a>
	</div>
	<form class="info_detail_edit" action="<?=base_url('User/myinfo_edit')?>" method="post" >
		<div class="info_basic">
			<h6>基本信息</h6>
			<div class="info_basic_detail">
				<ul>
					<li><div class="edit_container"><span class="info_detail_edit_a">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称</span><span class="must">*</span></div><div class="info_edit_fix"><input type="text" class="form-control" name="nickname" id="personal_info"  placeholder="昵称（不超过7个字）" maxlength="7" ></div></li>
					<li><span class="info_detail_edit_a">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校</span><span class="must">*</span>
						<div class="info_edit_fix">
							<select id="school" name="school">
								<option value="sjtu">上海交通大学</option>
								<option value="ecnu">华东师范大学</option>
								<option value="fdu">复旦大学</option>
								<option value="tongji">同济大学</option>
								<option value="sjtu">上海财经大学</option>
								<option value="sisu">上海外国语大学</option>
							</select>
						</div>
					</li>
					<li><span class="info_detail_edit_a">院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系</span><span class="must">*</span><div class="info_edit_fix"><input type="text" class="form-control" name="major" id="major"  placeholder="院系（如电子信息与电气工程）" maxlength="7" ></div></li>
					<li><span class="info_detail_edit_a">入学年份</span><span class="must">*</span>
						<div class="info_edit_fix">
							<select id="year" style="size:10;" name="year">
							</select>
						</div>
					</li>
					<li><span class="info_detail_edit_a">自我描述</span><span class="must">*</span><div class="info_edit_fix"><input type="text" class="form-control" name="describe" id="personal_info"  placeholder="一句话的描述（不超过15个字）" maxlength="7" ></div></li>
				</ul>
			</div>	
		</div>
		<div class="info_more">
			<h6>MORE</h6>
			<div class="info_more_detail">
				<ul>
					<li><span class="info_detail_edit_a">出生日期</span><span class="must">&nbsp;</span><div class="info_edit_fix"><input type="text" class="form-control" name="birthday" id="birthday"  placeholder="2015-01-01" maxlength="7" ></div></li>
					<li><span class="info_detail_edit_a">家&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;乡</span><span class="must">&nbsp;</span><div class="info_edit_fix"><input type="text" class="form-control" name="home" id="personal_info"  placeholder="如：闵行，上海，北京等" maxlength="7" ></div></li>
					<li><span class="info_detail_edit_a">兴趣爱好</span><span class="must">&nbsp;</span><div class="info_edit_fix"><input type="text" class="form-control" name="hobby" id="personal_info"  placeholder="填下你喜欢做的事情咯～" maxlength="7" ></div></li>
					<li><span class="info_detail_edit_a">情感状态</span><span class="must">&nbsp;</span>					
						<div class="info_edit_fix">
							<select name="status">
							  <option value ="singledog">汪汪汪</option>
							  <option value ="manwin">哈哈哈</option>
							  <option value="aojiao">保密</option>
							</select>
						</div>
					</li>
				</ul>
			</div>	
		</div>
		<div class="submit_edit_button">
			<button class="btn btn-primary"  type="submit"  >确认提交</button>
		</div>
	</form>


	<script>
		function submitData(){

		}
	</script>
	<script>
        $('#birthday').datepicker({
          format: 'yyyy-mm-dd',
          		weekStart: 1,
          		startDate: 1995-01-01,
                autoclose: true,
                todayBtn: 'linked',
                language: 'zh-CN'
         });
    </script>
    <script type="text/javascript">
		window.onload = function()
		{
			var now = new Date();
			var currentYear = now.getFullYear();
			var currentMonth = now.getMonth() + 1;
			BindSelect(document.getElementById('year'), currentYear - 50, currentYear + 5, currentYear);
			BindSelect(document.getElementById('month'), 1, 12, currentMonth);
		}

		function BindSelect(selectObj, startValue, endValue, selectedValue)
		{
			var i = 0;
			for(var val = startValue; val <= endValue; val++)
			{
				selectObj.options.add(new Option(val , val));
				if(val == selectedValue)
					selectObj.options[i].selected = true;
				i++;
			}
		}
	</script>

    <script type="text/javascript">
        $('.clockpicker').clockpicker();
        $('.date').datepicker();
    </script>
</html>