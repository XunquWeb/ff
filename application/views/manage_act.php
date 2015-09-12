<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/manage_act.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('js/jquery-2.1.0.min.js')?>"></script>
  </head>



<body>
<div id="event_attendees_thumbs">
    <table class="table table-bordered table-striped" style="width:100%;table-layout:fixed;">
        <thead>
            <tr>
                <th>名字</th><th>手机</th><th>学校</th><th>报名时间</th>
            </tr>
        </thead>
        <tbody id="e_a_thumb_body">
            <div class="model">
                <tr id="e_a_data_0">
                    <td class="name">黄清昊</td><td style="WORD-WRAP: break-word" class="phone"></td><td class="school"></td><td class="date"></td>
                </tr>
                <tr>
                    <td>验证消息</td><td colspan=3 style="WORD-WRAP: break-word">发起人</td>
                </tr>
                <tr>
                    <td colspan=4 style="background-color:white;"></td>
                </tr>
            </div>
        </tbody>
    </table>
</div>
</body>
<?php //var_dump($list); ?>

<script type="text/javascript">
    $(function(){alert(123);});
    $(document).ready(function(){alert("test");});
    $(document).ready(function test(){
        $forum_arr =eval('<?php var_dump($list); ?>');
        $.each($forum_arr,function(n,value){
                          $html_temp = $(".model").clone();
                          $html_temp.find('.name').text(value['am_name']);
                          $html_temp.find('.phone').text(value['am_phone']);
                          $html_temp.find('.school').text(value['am_college']);
                          $html_temp.find('.date').text(value['am_jointime']);
                          $(".forum-frame").append($html_temp);

        }


    });

</script>
</html>

