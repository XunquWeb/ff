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
            <p>所有活动</p>
            <span>总有新奇在身边</span>
          </div>
        </a>
        <a href="<?=base_url('Forum/public_forum')?>" class="b_item">
          <i class="b_icon"></i>
          <div class="fl">
            <p>哈哈哈哈</p>
            <span>大家一起来吐槽</span>
          </div>
        </a>
      </div>


      <ul id="channel_list">
        <a class="ch_item" href="<?=base_url('Act/display/1')?>" data-order="3">
          <i class="ch_icon" style="background-position: 0px -140.625px;"></i>
          <div class="fl">
            <p>公益·社会创新</p>
            <span>3719个项目,148722人参与</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/7')?>" data-order="5">
          <i class="ch_icon" style="background-position: 0px -281.25px;"></i>
          <div class="fl">
            <p>梦想·自由飞翔</p>
            <span>7143个项目,203243人参与</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/2')?>" data-order="2">
          <i class="ch_icon" style="background-position: 0px -70.3125px;"></i>
          <div class="fl">
            <p>旅行·去体验吧</p>
            <span>6410个项目,153164人参与</span>
          </div>
        </a>
        <a class="ch_item" href="<?=base_url('Act/display/4')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px 0px;"></i>
          <div class="fl">
            <p>生活·吃喝玩乐</p>
            <span>9639个项目,133049人参与</span>
          </div>
        </a>
      </ul>
      <div id="btm">
        <span class="img"></span>
        <span>亲，已经到底了哦~</span>
      </div>

      <script>
        $('.carousel').carousel()
      </script>
</html>
