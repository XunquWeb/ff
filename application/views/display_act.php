<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/display_act.css')?>" rel="stylesheet">
  </head>
  		<div class="display-top">
            <a id="display-classify" class="display-select" onclick="setFrameGroupIndex(0);">全部分类<span class="triangle_down"></span></a>
            
            <a id="display-rank" class="display-select"  onclick="setFrameGroupIndex(1);">最新约单<span class="triangle_down"></span></a>

            <a id="display-region" class="display-select" onclick="setFrameGroupIndex(2);">求队友<span class="triangle_down"></span></a>
        </div>

        <div class="scroller-wrapper display-none">
                <div id="dropdown_scroller" class="dropdown-scroller">
                    <ul style="-webkit-transition-property: -webkit-transform; transition-property: -webkit-transform; -webkit-transform-origin: 0px 0px 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                        <li class="category-wrapper classify active">
                            <ul class="dropdown-list" id="type1">
                            	<li  data-category-id="0" data-category-name="" data-has-sub="true"><a style="display:none;">0</a><span>全部分类</span></li>
                            	<li  data-category-id="1" data-category-name=""><a style="display:none;">1</a><span>吃喝玩乐</span></li>
                            	<li  data-category-id="2" data-category-name=""><a style="display:none;">2</a><span>我会更棒</span></li>
                            	<li  data-category-id="3" data-category-name=""><a style="display:none;">3</a><span>健身减肥</span></li>
                            	<li  data-category-id="4" data-category-name=""><a style="display:none;">4</a><span>来约奇葩</span></li>
                            	<li  data-category-id="5" data-category-name=""><a style="display:none;">5</a><span>请求支援</span></li>
                            	<li  data-category-id="6" data-category-name=""><a style="display:none;">6</a><span>人在途中</span></li>
                            	<li  data-category-id="7" data-category-name=""><span>影音书画</span><a style="display:none;">7</a></li>
                            	<li  data-category-id="8" data-category-name=""><span>约谈约聊</span><a style="display:none;">8</a></li>
                            	<li  data-category-id="9" data-category-name=""><a style="display:none;">9</a><span>新生戳这</span></li>                           	
                            </ul>
                        </li>
                        <li class="category-wrapper rank display-none">
                            <ul class="dropdown-list" id="type2">
                            	<li  data-category-id="0" data-category-name="" data-has-sub="true"><span>最新约单</span><a style="display:none;">0</a></li>
                            	<li  data-category-id="1" data-category-name=""><span>最热约单</span><a style="display:none;">1</a></li>
                            	<li  data-category-id="2" data-category-name=""><span>精品推荐</span><a style="display:none;">2</a></li>
                            </ul>
                        </li>
                        <li class="category-wrapper region display-none">
                            <ul class="dropdown-list" id="type3">
                            	<li  data-category-id="0" data-category-name="" data-has-sub="true"><span>全部</span><a style="display:none;">0</a></li>
                            	<li  data-category-id="1" data-category-name=""><span>求队友</span><a style="display:none;">1</a></li>
                            	<li  data-category-id="2" data-category-name=""><span>酝酿中</span><a style="display:none;">2</a></li>
                            	<li  data-category-id="3" data-category-name=""><span>已结束</span><a style="display:none;">3</a></li>
                            	
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
        <div class="scroller_shadow display-none" style="height:100%;width:100%;background: rgba(0,0,0,.7);z-index:2;position:fixed;top:0;">
		</div>
	<div class="container channel_list" id="ff_projects_list">
<!--
		<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding">
		        <a href="#">
		            <div class="clearfix">
		                <span class="ribbon labels">#act_state#</span>
		                <h1>#act_title#</h1>
		            </div>

		            <div class="media">
		            
		            	<p class="item-img"><img class="lazy pull-left" src="http://p.qsc.dreamore.cn/Uploads/Project/Thumb/20150507/57d5208ffd8e1a11651024415aad821e.jpg!thumb"></p>
	            		<p>#act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail#</p>
            		</div>
            	</a>
            	
        			<p class="channel_tip">来自<a href="#" class="channel_text">#channel_text#</a></p>
        		

		    </div>
		    <div class="panel-footer">
		        浏览&nbsp;&nbsp;<span><i class="blue">#act_view_num#</i>次</span>
		        响应&nbsp;&nbsp;<span><i class="blue">#act_take_num#</i>次</span>
		         评论<span><i class="blue">#act_comment_num#</i>次</span>
		    </div>
		</div>
-->
<!--
<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding"><a href="http://localhost:8888/ff/Act/detail/36">		    	<div class="clearfix">
		            <span class="ribbon labels">进行中</span><h1>流浪狗求收养</h1></div><div class="media"><p class="item-img"><img class="lazy pull-left" src="http://img3.imgtn.bdimg.com/it/u=525184704,2771878227&amp;fm=21&amp;gp=0.jpg"></p><p>学校的流浪狗妈妈因为咬了人背警察带走了555 留下了一窝小宝宝，爱心人士快来领养啦！</p></div></a><p class="channel_tip">发起人<a href="http://localhost:8888/ff/Act/display/4" class="channel_text">好仁</a><p class="channel_tip">来自<a href="http://localhost:8888/ff/Act/display/4" class="channel_text">公益</a></p></p>		    </div>
		    <div class="panel-footer">浏览&nbsp;&nbsp;<span><i class="blue">137</i>次</span>		    	响应&nbsp;&nbsp;<span><i class="blue">33</i>次</span>
		        评论<span><i class="blue">78</i>次</span>
		    </div>
		</div>
		<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding"><a href="http://localhost:8888/ff/Act/detail/36">		    	<div class="clearfix">
		            <span class="ribbon labels">进行中</span><h1>寻找男神赵大哥</h1></div><div class="media"><p class="item-img"><img class="lazy pull-left" src="https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=2959798364,3991048693&fm=96"></p><p>听说赵大哥来交通大学了！天呐。。少女们快来围观～～～</p></div></a><p class="channel_tip">发起人<a href="http://localhost:8888/ff/Act/display/4" class="channel_text">曹小超</a><p class="channel_tip">来自<a href="http://localhost:8888/ff/Act/display/4" class="channel_text">娱乐</a></p></p>		    </div>
		    <div class="panel-footer">浏览&nbsp;&nbsp;<span><i class="blue">137</i>次</span>		    	响应&nbsp;&nbsp;<span><i class="blue">33</i>次</span>
		        评论<span><i class="blue">78</i>次</span>
		    </div>
		</div>
		<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding"><a href="http://localhost:8888/ff/Act/detail/36">		    	<div class="clearfix">
		            <span class="ribbon labels">进行中</span><h1>怎么通过助飞计划结识学妹</h1></div><div class="media"><p class="item-img"><img class="lazy pull-left" src="https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=1594611624,4089902143&fm=58"></p><p> 助飞计划只是水一水你就图样图森破了，这周末我有幸邀请了王学长指点同学们怎么样通过助飞计划成为学妹眼中的靠谱学长！后面，你懂的...</p></div></a><p class="channel_tip">发起人<a href="http://localhost:8888/ff/Act/display/4" class="channel_text">秦小浩</a><p class="channel_tip">来自<a href="http://localhost:8888/ff/Act/display/4" class="channel_text">公益</a></p></p>		    </div>
		    <div class="panel-footer">浏览&nbsp;&nbsp;<span><i class="blue">137</i>次</span>		    	响应&nbsp;&nbsp;<span><i class="blue">33</i>次</span>
		        评论<span><i class="blue">78</i>次</span>
		    </div>
		</div>
-->

	<?php

		switch($choose[2]){
			case ("0"):
				$tag = "全部";break;
			case ("1"):
				$tag = "求队友";break;
			case ("2"):
				$tag = "酝酿中";break;
			case ("3"):
				$tag = "已结束";break;
			
		}

		if($row == 0)
		{
			echo "<p style='text-align:center;height:400px;'>没有相关约单～</p>";
		}
		else{
		foreach ($row as $r) {
			//var_dump($r);
			if($tag!='全部'){
			if($r['a_state'] == $tag){
			echo <<<TR
			<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding">
TR;
		    echo "<a href=\"" . base_url('Act/detail') . "/" . $r['a_id'] . "\">";
		    echo <<<TR
		    	<div class="clearfix">
		            <span class="ribbon labels">
TR;
						echo $r['a_state'];
					echo '</span>';
		    
		    		echo '<h1>' . $r['a_name'] . '</h1>';
				echo '</div>';
			
		    	echo '<div class="media">';        
		    		echo '<p class="item-img"><img class="lazy pull-left" src='.'https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=1109521759,949508831&fm=58'.'></p>';
	            	echo '<p>' . $r['extra'] . '</p>';
            	echo '</div>';
            echo '</a>';
            
            
        	echo '<p class="channel_tip">来自<a href="'. base_url('Act/display') . '/' . $r['t_id'] .'" class="channel_text">' . $r['t_name'] . '</a></p>';
        		
			echo <<<TR
		    </div>
		    <div class="panel-footer">
TR;
		    echo '浏览&nbsp;<span><i class="blue">' . $r['browse'] . '</i>次</span>&nbsp';

		    echo '报名&nbsp;<span><i class="blue">'.$r['join_num'].'</i>次</span>';

			echo <<<TR
		    </div>
		</div>
TR;
		}
		}
		else{
			echo <<<TR
			<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding">
TR;
		    echo "<a href=\"" . base_url('Act/detail') . "/" . $r['a_id'] . "\">";
		    echo <<<TR
		    	<div class="clearfix">
		            <span class="ribbon labels">
TR;
						echo $r['a_state'];
					echo '</span>';
		    
		    		echo '<h1>' . $r['a_name'] . '</h1>';
				echo '</div>';
			
		    	echo '<div class="media">';        
		    		echo '<p class="item-img"><img class="lazy pull-left" src='.'https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=1109521759,949508831&fm=58'.'></p>';
	            	echo '<p>' . $r['extra'] . '</p>';
            	echo '</div>';
            echo '</a>';
            
            
        	echo '<p class="channel_tip">来自<a href="'. base_url('Act/display') . '/' . $r['t_id'] .'" class="channel_text">' . $r['t_name'] . '</a></p>';
        		
			echo <<<TR
		    </div>
		    <div class="panel-footer">
TR;
		    echo '浏览&nbsp;<span><i class="blue">' . $r['browse'] . '</i>次</span>&nbsp';

		    echo '报名&nbsp;<span><i class="blue">'.$r['join_num'].'</i>次</span>';

			echo <<<TR
		    </div>
		</div>
TR;
		}
		}
		}



	?>

	      <a id="tocreat" style="display:inline;" href="<?php echo base_url("act/submit")?>"><i class="fa fa-plus"></i></a>
          <div id="totop" style="display: block;"><i class="fa fa-angle-up"></i></div>
	
		<!-- 
	
		<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding">
		        <a href="/project/view?project_id=24587">
		            <div class="clearfix">
		                <span class="ribbon labels">进行中</span>
		                <h1>海大青协：来自一只脊椎断裂的流浪猫的祈求</h1>
		            </div>

		            <div class="media">
		            
		            	<p class="item-img"><img class="lazy pull-left" src="http://p.qsc.dreamore.cn/Uploads/Project/Thumb/20150527/210a40590256915a94f956c224796822.jpg!thumb"></p>
	            	
	            		【大连海事大学青年志愿者协会】大家好，我们是大连海事大学青年志愿者协会，5月23日，海事的同学走在校园的路上发现了这只受伤的小猫咪后马上联系上了青协，后经过医生诊断，小猫咪情况是脊椎断裂，左后腿与尾部无法动弹，如今小猫只能趴在地上一动不动无法控制大小便，得知治疗需要复杂的手术，费用高达5000以上，我们陷入了困境。现如今，这只小猫咪被暂时收样在我们志愿者的宿舍中，每晚，小猫夹杂疼痛和对再次行走的渴望的叫声都刺痛了我们，悉心的照顾只愿给予它生存的意志。流浪，本已让它的心灵黑暗无光，伤痛，更使它的肉体饱受折磨。一条脆弱却坚强的生命在等待我们的救助，真诚希望能够通过我们有限的力量去召集更多爱为它搭建生命的脊椎。
只有爱，能让它重新站立！你会加入我们吗？
            		</div>
            	</a>
            	
    				<p class="channel_tip">来自<a href="/channel/show?channel_id=13" class="channel_text">公益社会创新</a>频道</p>
				

		    </div>
		    <div class="panel-footer">
		        目标&nbsp;&nbsp;<span><i class="blue">1</i>元</span>
		        已筹&nbsp;&nbsp;<span><i class="blue">4351</i>元</span>
		        支持 <span><i class="blue">330</i>次</span>
		    </div>
		</div>

 -->
 <!--
		<div class="page">
		    
		    	<a class="pre disabled">
			        上一页
			    </a>
		   	
		   	
				<a class="next" href="/channel/show?type=hot&amp;channel_id=13&amp;p=2">
					下一页
			    </a>
			
		</div>
-->
	</div>
<script>
	$(function(){
        $(window).scroll(function(){
         if($(this).scrollTop() < 300) {
              $('#totop') .fadeOut();
          } else {
              $('#totop') .fadeIn();
          }
         });
         $('#totop').on('click', function(){
          $('html, body').animate({scrollTop:0}, 'fast');
          return false;
         })
      });



	$(function(){
		$choose0 = "<?php echo $choose[0];?>";
		$choose1 = "<?php echo $choose[1];?>";
		$choose2 = "<?php echo $choose[2];?>";
		$url = "<?php echo base_url('act/display');?>"
		//alert($url);

		switch($choose0){
			case ("0"):
				$data1 = "全部分类";break;
			case ("1"):
				$data1 = "吃喝玩乐";break;
			case ("2"):
				$data1 = "我会更棒";break;
			case ("3"):
				$data1 = "健身减肥";break;
			case ("4"):
				$data1 = "来约奇葩";break;
			case ("5"):
				$data1 = "请求支援";break;
			case ("6"):
				$data1 = "人在途中";break;
			case ("7"):
				$data1 = "影音书画";break;
			case ("8"):
				$data1 = "约谈约聊";break;
			case ("9"):
				$data1 = "新生戳这";break;
		}
		switch($choose1){
			case ("0"):
				$data2 = "最新约单";break;
			case ("1"):
				$data2 = "最热约单";break;
			case ("2"):
				$data2 = "精品推荐";break;
		}
		switch($choose2){
			case ("0"):
				$data3 = "全部";break;
			case ("1"):
				$data3 = "求队友";break;
			case ("2"):
				$data3 = "酝酿中";break;
			case ("3"):
				$data3 = "已结束";break;
		}
		$("#display-classify").html($data1+"<span class='triangle_down'>");
		$("#display-rank").html($data2+"<span class='triangle_down'>");
		$("#display-region").html($data3+"<span class='triangle_down'>");
		
		$("#type1 li").bind("click",function(){
			$choose0 = $(this).find('a').first().text();
			// alert($url);
			// alert($choose0);
			// alert($choose1);
			// alert($choose2);
			$url = $url+"/" + $choose0+"/" + $choose1+"/" +$choose2;
			location.href = $url;
		});
		$("#type2 li").bind("click",function(){
			$choose1 = $(this).find('a').first().text();
			// alert($url);
			// alert($choose0);
			// alert($choose1);
			// alert($choose2);
			$url = $url+"/" + $choose0+"/" + $choose1+"/" +$choose2;
			//alert($url);
			location.href = $url;
		});
		$("#type3 li").bind("click",function(){
			$choose2 = $(this).find('a').first().text();
			// alert($url);
			// alert($choose0);
			// alert($choose1);
			// alert($choose2);
			$url = $url+"/" + $choose0+"/" + $choose1+"/" +$choose2;
			//alert($url);
			location.href = $url;
		});

		
	});
	var updown = 1;
	$('.scroller_shadow').bind('click', function() 
		{ 
			$('.scroller-wrapper').addClass('display-none');
			$('.scroller_shadow').addClass('display-none');
			$('.display-top span').removeClass('triangle_up');
			$('.display-top span').addClass('triangle_down'); 
		}
	);
	function setFrameGroupIndex(state){
		$('.scroller-wrapper').removeClass('display-none');
		$('.scroller_shadow').removeClass('display-none');
		$('.category-wrapper').addClass('display-none');

		switch(state){
			case 0:{
				if($('#display-classify span').hasClass('triangle_down')){
					$('.display-top span').removeClass('triangle_up');
					$('.display-top span').addClass('triangle_down');
					$('#display-classify span').removeClass('triangle_down').addClass('triangle_up');$('.classify').removeClass('display-none');break;
				}
				else{
					$('.display-top span').removeClass('triangle_up');
					$('.display-top span').addClass('triangle_down');
					$('.scroller-wrapper').addClass('display-none');
					$('.scroller_shadow').addClass('display-none');
					break;					
				}
			} 
				
			case 1:{
				if($('#display-rank span').hasClass('triangle_down')){
					$('.display-top span').removeClass('triangle_up');
					$('.display-top span').addClass('triangle_down');
					$('#display-rank span').removeClass('triangle_down').addClass('triangle_up');$('.rank').removeClass('display-none');break;
				}
				else{
					$('.display-top span').removeClass('triangle_up');
					$('.display-top span').addClass('triangle_down');
					$('.scroller-wrapper').addClass('display-none');
					$('.scroller_shadow').addClass('display-none');
					break;					
				}
			}  
			case 2:{
				if($('#display-region span').hasClass('triangle_down')){
					$('.display-top span').removeClass('triangle_up');
					$('.display-top span').addClass('triangle_down');
					$('#display-region span').removeClass('triangle_down').addClass('triangle_up');$('.region').removeClass('display-none');break;
				}
				else{
					$('.display-top span').removeClass('triangle_up');
					$('.display-top span').addClass('triangle_down');
					$('.scroller-wrapper').addClass('display-none');
					$('.scroller_shadow').addClass('display-none');
					break;				
				}
			}  
		}
	}
</script>

</html>
