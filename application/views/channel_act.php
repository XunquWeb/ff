<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/channel_act.css')?>" rel="stylesheet">
  </head>
      <div id="carousel-channel-generic" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?=base_url('image/example1.jpeg')?>" alt="...">
          </div>
          <div class="item">
            <img src="<?=base_url('image/example2.jpeg')?>" alt="...">
          </div>
          <div class="item">
            <img src="<?=base_url('image/example3.jpeg')?>" alt="...">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-channel-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="font-size:10px"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-channel-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:10px"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div id="board">
        <a href="<?=base_url('Act/display/0')?>" class="b_item">
          <i class="b_icon"></i>
          <div class="fl">
            <p>全部约单</p>
            <span>总有新奇在身边</span>
          </div>
        </a>
        <a href="<?=base_url('Forum/public_forum')?>" class="b_item">
          <i class="b_icon"></i>
          <div class="fl">
            <p>广场趣谈</p>
            <span>大家一起来吐槽</span>
          </div>
        </a>
      </div>


      <ul id="channel_list">
        <a class="ch_item" href="<?=base_url('Act/display/1')?>" data-order="3">
          <i class="ch_icon" style="background-position: 0px -140.625px;"></i>
          <div class="fl">
            <p>吃喝玩乐</p>
            <span>－旅行、桌游、展览、约饭</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/7')?>" data-order="5">
          <i class="ch_icon" style="background-position: 0px -281.25px;"></i>
          <div class="fl">
            <p>健身减肥</p>
            <span>－跑步、网球、乒羽、健身</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/2')?>" data-order="2">
          <i class="ch_icon" style="background-position: 0px -70.3125px;"></i>
          <div class="fl">
            <p>影音书画</p>
            <span>－影视交流、换书、画画</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px 0px;"></i>
          <div class="fl">
            <p>同学去哪</p>
            <span>－提前拼车、一起回家</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -140.625px;"></i>
          <div class="fl">
            <p>争做学霸</p>
            <span>－学业辅导、课程交换</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -281.25px;"></i>
          <div class="fl">
            <p>来约奇葩</p>
            <span>－恐怖浪漫、奇思妙想</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -70.3125px;"></i>
          <div class="fl">
            <p>我会更棒</p>
            <span>－科研实践、商赛创业</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px 0px;"></i>
          <div class="fl">
            <p>摄影约片</p>
            <span>－约摄影、约外拍</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -140.625px;"></i>
          <div class="fl">
            <p>变帅变美</p>
            <span>－逛街化妆、好货交流</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -281.25px;"></i>
          <div class="fl">
            <p>约谈约聊</p>
            <span>－新生指导、心理咨询</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px 0px;"></i>
          <div class="fl">
            <p>其他脑洞</p>
            <span>－电脑维修、待吃零食</span>
          </div>
        </a>
      </ul>
      <div id="btm">
        <span class="img" ></span>
        <span>亲，已经到底了哦~</span>
      </div>

      <script>
        $('.carousel').carousel()
      </script>
</html>
