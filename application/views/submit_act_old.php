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
  </head>

    <div class="container" style="margin-top:-50px;">
          <div class="col-xs-8 col-md-offset-3 col-md-3">
            <h5 >发布活动</h5>
          </div>
          <hr style="width:100%;">
          <div class="col-md-8 col-md-offset-3 content" >
            <form  role="form" class="form-horizontal submit_act-form-fixed" action="submit-act" method="post" >     
              <div class="form-group"> 
                <label class="control-label col-sm-2" >类别<span>*</span></label>
                <div class="col-md-8 col-sm-6">
                  <div class="btn-group"  id="submit_act_choose">
                      <button type="button" class="btn btn-primary" name="activity_kind" id="run" value="1" onclick=getpara(1) > 12
                      <button type="button" class="btn btn-primary" name="activity_kind" id="swim" value="2"> 34
                      <button type="button" class="btn btn-primary" name="activity_kind" id="film" value="3"> 56
                      <button type="button" class="btn btn-primary" name="activity_kind" id="ball" value="4" > 78
                  </div>  
                </div>
              </div>     
              <div class="form-group">
                <label class="control-label col-sm-2" >活动名称<span>*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="activity_name" id="activity_name"  placeholder="名称（不超过15个字）" maxlength="15" >
                </div> 
              </div>    
              <div id='vpara'></div>
              <!--        it's the abandoned time selection part     
              <div class="form-group">
                <label for="dtp_input1" class="col-md-2 col-sm-2 control-label">开始时间<span>*</span></label>
                <div class="col-md-8 col-sm-8" id="starttime_main">
                  <div class="input-group date form_datetime controls" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
                    <input class="form-control" size="20" type="text" name="start_time" id="start_time" placeholder="活动开始日期" value="" >
                    <span class="input-group-addon"><label for="start_time" class="glyphicon glyphicon-th"></label></span>
                  </div>
                  <div class="input-group clockpicker">
                        <input type="text" class="form-control" placeholder="活动开始时间">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                  </div>

                </div>
              </div>



              <div class="form-group">
                <label for="dtp_input2" class="col-md-2 col-sm-2 control-label">结束时间<span>*</span></label>
                <div class="col-md-8 col-sm-8">
                  <div class="input-group date form_datetime controls" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input2">
                    <input class="form-control" size="20" type="text" name="end_time" id="end_time" placeholder="活动结束日期" value="" >
                    <span class="input-group-addon"><label for="end_time" class="glyphicon glyphicon-th"></label></span>
                  </div>
                  <div class="input-group clockpicker">
                        <input type="text" class="form-control" placeholder="活动结束时间">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                  </div>


                </div>
              </div>
                
              <div class="form-group">
               <label class="control-label col-sm-2" >地点<span>*</span></label>
               <div class="col-sm-8">
                 <input type="text" class="form-control"  placeholder="地点（不超过10个字）" name="place" id="place" maxlength="10">
               </div> 
              </div>

              <div class="form-group">
                 <label class="control-label col-sm-2">人数上限<span>*</span></label>
                 <div class="col-sm-8">
                   <input type="text" class="form-control" onkeyup="value=value.replace(/[^\d]/g,'') "  placeholder="人数上限" pattern="^\+?[1-9][0-9]*$" name="max_number" id="max_number">
                 </div> 
              </div>
-->
              <div class="form-group">
                  <label for="dtp_input3" class="col-md-2 col-sm-2 control-label" >截止报名<span style="visibility:hidden">*</span></label>
                <div class="col-md-8 col-sm-8">
                  <div class="input-group date form_datetime controls" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input3">
                    <input class="form-control" size="20" type="text" name="close_time" id="close_time" placeholder="截止报名时间后不再接受申请" value="" >
                    <span class="input-group-addon"><label for="close_time" class="glyphicon glyphicon-th"></label></span>
                  </div>
                  <div class="input-group clockpicker">
                        <input type="text" class="form-control"  placeholder="截止报名时间">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                  </div>       
                </div>
              </div> 


              <div class="form-group">
                <label class="control-label col-sm-2" >备注<span style="visibility:hidden">*</span></label>
                <div class="col-sm-8">
                  <textarea class="form-control" rows="3"  onKeyDown="textdown(event)"
                  onKeyUp="textup()" onblur="textup()" placeholder="选填，限50字" name="remark"id="remark"></textarea>
                </div> 
              </div>
           
              <div class="form-group">
                <div class="col-md-2 col-xs-0 col-sm-2"></div>
                <div class="col-md-2 col-xs-12 col-sm-8">
                  <button class="btn btn-primary submit_button"  type="button" onclick="return submitData()" >确认发布</button>
                </div>
                <div class="col-xs-2"></div>
              </div>
            </form>
          </div>    <!--col-md-10-->

    </div>



    <script>
        $('#close_time').datepicker({
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
    <script>
        function timedatepick(num){
        $('#start_time'+num).datepicker({
          format: 'yyyy-mm-dd',
                weekStart: 1,
                autoclose: true,
                todayBtn: 'linked',
                language: 'zh-CN'
         });
        }
        function getpara(typeId){
              text0 = '<div class="form-group"><label class="control-label col-sm-2" >#name#<span>*</span></label><div class="col-sm-8"><input type="text" class="form-control" name="#id#" id="#id#"  placeholder="#ph#" maxlength="255" ></div></div>';
              text1 = '<div class="form-group"><label for="dtp_input#id#" class="col-md-2 col-sm-2 control-label">#name#<span>*</span></label><div class="col-md-8 col-sm-8"><div class="input-group date form_datetime controls" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input#id#"><input class="form-control" size="20" type="text" name="#id#" id="start_time#id#" placeholder="#ph#" value="" ><span class="input-group-addon"><label for="start_time#id#" class="glyphicon glyphicon-th"></label></span></div><div class="input-group clockpicker"><input type="text" class="form-control" placeholder="#ph#"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span></div></div></div>';
              text2 = '<div class="form-group"><label class="control-label col-sm-2" >#name#<span>*</span></label><div class="col-sm-8"><input type="text" class="form-control" name="#id#" id="#id#"  placeholder="#ph#" maxlength="255" ></div></div>';
            var x=new XMLHttpRequest();
            x.open("post","<?php echo base_url('Ajax/get_act_para')?>",false);
		      	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            x.send("t="+typeId);
            if(x.status==200){

                var y=x.response.split(':');
                if(y[0]=="data"){
                    var data = y[1].substring(0,y[1].length-1).split('#');
					var arr=[];
          document.getElementById('vpara').innerHTML='';
					for(var i=0,a;a=data[i];i++){
						var item = a.split('&');//item[0]标题 item[2]类型
						//show item[0],[1],[2];
            var text='';
            switch(parseInt(item[2])){
              case 0: text=text0; break;
              case 1: text=text1;arr.push(i); break;       
              case 2: text=text2; break;
            }
            text=text.replace(/#name#/g,item[0]);
            text=text.replace(/#ph#/g,item[1]);
            text=text.replace(/#id#/g,i+"");
            document.getElementById('vpara').innerHTML=document.getElementById('vpara').innerHTML+text;
					  }
					for(var i=0,a;a=data[i];i++){
						timedatepick(i);
					}
          $('.clockpicker').clockpicker();
          $('.date').datepicker();

                }else if(y[0]=="err"){
					         //show error;
                }
            }
        }
    </script>

</html>
