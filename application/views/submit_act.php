<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/submit_act.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/clockpicker.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/datepicker.css')?>" rel="stylesheet">
    <script src="<?=base_url('js/clockpicker.js')?>"></script>
    <script src="<?=base_url('js/datepicker.js')?>"></script>
    <script src="<?=base_url('js/jquery-1.10.2.min.js')?>"></script>
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
                <input type="text" class="form-control" placeholder="约单主题" required="" data-validation-message="请输入约单主题" data-validation-type="warning" name="Title" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group datetime">
                <span class="icon-time-md"></span>
                <input type="text" class="form-control" placeholder="活动开始时间" required="" data-validation-message="请输入约单开始时间" data-validation-type="warning" name="Start" value="2015-08-13 08:00:00" id="mobiscroll1438876656972" readonly="">
                <!-- <div class="tips sr-only">输入活动开始时间</div> -->
            </div>
            <div class="form-group datetime">
                <span class="icon-time-md"></span>
                <input type="text" class="form-control" placeholder="活动结束时间" required="" data-validation-message="请输入约单结束时间" data-validation-type="warning" name="End" value="2015-08-13 17:00:00" id="mobiscroll1438876656973" readonly="">
                <!-- <div class="tips sr-only">输入活动结束时间</div> -->
            </div>
            <div class="form-group">
                <span class="icon-city-md"></span>
                <input type="text" id="mobiscroll1438876656974_dummy" class="form-control" placeholder="" readonly="">
                </input>

            </div>
            <div class="form-group">
                <span class="icon-place-md"></span>
                <input type="text" class="form-control" placeholder="详细地址" required="" data-validation-message="请输入活动详细地址" data-validation-type="warning" name="Address" value="">
            </div>
            <div class="event-edit">
                <div class="placeholder"><span></span><p>添加约单详情，让小伙伴更好的了解约单～</p></div>
                <div class="form-control textarea" contenteditable="" data-validation-message="活动详情不能少于5个字数" data-validation-type="warning" data-abide-validator="minLength" name="Description">
                    
                </div>
                
            </div>
            <div class="create-event-more open" >
                <h2><div class="pull-right"><span class="icon-arrow-down"></span></div>更多选项</h2>
                    <div>
                        设置为私密约单
                        <div id="isPrivate" class="toggle">
                            <div class="toggle-handle"></div>
                        </div>
                    </div>
                    <div>
                        报名者需要经过您的同意
                        <div id="isAccord" class="toggle">
                            <div class="toggle-handle"></div>
                        </div>
                    </div>
                    <div class="">
                        选择约单类别
                        <select name="Setting.HdxTags" id="event-select-hdxtag">
                            
                            <option value="" img="/Content/v2.0/img/poster/thumb/entertainment.jpg">选择主题</option>
                            <option value="创业" img="/Content/v2.0/img/poster/thumb/es.jpg">创业</option>
                            <option value="商务" img="/Content/v2.0/img/poster/thumb/business.jpg">商务</option>
                            <option value="公益" img="/Content/v2.0/img/poster/thumb/benefit.jpg">公益</option>
                            <option value="社交" img="/Content/v2.0/img/poster/thumb/social.jpg">社交</option>
                            <option value="亲子" img="/Content/v2.0/img/poster/thumb/baby.jpg">亲子</option>
                            <option value="电影" img="/Content/v2.0/img/poster/thumb/movie.jpg">电影</option>
                            <option value="娱乐" img="/Content/v2.0/img/poster/thumb/entertainment.jpg">娱乐</option>
                            <option value="生活" img="/Content/v2.0/img/poster/thumb/life.jpg">生活</option>
                            <option value="音乐" img="/Content/v2.0/img/poster/thumb/music.jpg">音乐</option>
                            <option value="科技" img="/Content/v2.0/img/poster/thumb/tech.jpg">科技</option>
                            <option value="运动" img="/Content/v2.0/img/poster/thumb/sport.jpg">运动</option>
                            <option value="课程" img="/Content/v2.0/img/poster/thumb/course.jpg">课程</option>
                            <option value="校园" img="/Content/v2.0/img/poster/thumb/school.jpg">校园</option>
                            <option value="文化" img="/Content/v2.0/img/poster/thumb/culture.jpg">文化</option>
                            
                            <option value="其他" img="/Content/v2.0/img/poster/thumb/es.jpg">其他</option>
                        </select>
                    </div>
                    <div>
                        用户报名填写项
                        <ul>
                            <li class="btn btn-sm btn-default active actived">姓名</li>
                            <li class="btn btn-sm btn-default active actived">手机</li>
                            <li class="btn btn-sm btn-default">学校</li>
                            <li class="btn btn-sm btn-default">学院</li>
                            <li class="btn btn-sm btn-default">年级</li>
                            <li class="btn btn-sm btn-default">备注</li>
                            <li class="btn btn-sm btn-default">参与人数</li>
                        </ul>
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
    $(".create-event-more h2").bind('click',function(){
        if($(".create-event-more").hasClass('open'))
        {
            $(".create-event-more").removeClass('open');
        }
        else
        {
            $(".create-event-more").addClass('open');
        }
    })
</script>
