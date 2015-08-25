<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/clockpicker.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/datepicker.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/manage_act.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('js/clockpicker.js')?>"></script>
    <script src="<?php echo base_url('js/datepicker.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>
  </head>




<div id="event_attendees_thumbs">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>&nbsp;</th><th>名称</th><th>手机</th><th>邮箱</th><th>状态</th><th>报名时间</th><th>&nbsp;</th></tr>
        </thead>
        <tbody id="e_a_thumb_body">
            <tr id="e_a_data_0">
            <td><input type="checkbox" id="e_a_c_0" onclick="javascript:$(this).toggleClass('thum_selected');selectEventAttendee($(this).prop('checked'),0);"></td><td>黄清昊</td><td><span class="label label-success">有效</span></td><td>07/30 19:39</td><td></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th>&nbsp;</th><th>名称</th><th>手机</th><th>邮箱</th><th>状态</th><th>报名时间</th><th>&nbsp;</th></tr>
        </thead>
        <tbody id="e_a_thumb_body">
            <tr id="e_a_data_0">
            <td><input type="checkbox" id="e_a_c_0" onclick="javascript:$(this).toggleClass('thum_selected');selectEventAttendee($(this).prop('checked'),0);"></td><td>黄清昊</td><td><span class="label label-success">有效</span></td><td>07/30 19:39</td><td></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th>&nbsp;</th><th>名称</th><th>手机</th><th>邮箱</th><th>状态</th><th>报名时间</th><th>&nbsp;</th></tr>
        </thead>
        <tbody id="e_a_thumb_body">
            <tr id="e_a_data_0">
            <td><input type="checkbox" id="e_a_c_0" onclick="javascript:$(this).toggleClass('thum_selected');selectEventAttendee($(this).prop('checked'),0);"></td><td>黄清昊</td><td><span class="label label-success">有效</span></td><td>07/30 19:39</td><td></td>
            </tr>
        </tbody>
    </table>
</div>


