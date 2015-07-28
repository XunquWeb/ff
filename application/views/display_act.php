<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/display_act.css')?>" rel="stylesheet">
  </head>
	<div class="container channel_list" id="ff_projects_list">
		<div class="project_tab">
			<ul class="nav_tabs" id="myTab">
					<a class="nav_item active" href="#" onclick="change()">最热</a>
					<a class="nav_item " href="#" onclick="change()">经典</a>
			</ul>
		</div>
		<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding">
		        <a href="<?=base_url('act/detail')?>">
		            <div class="clearfix">
		                <span class="ribbon labels">#act_state#</span>
		                <h1>#act_title#</h1>
		            </div>

		            <div class="media">
		            
		            	<div class="item-img"><img class="lazy pull-left" src="http://p.qsc.dreamore.cn/Uploads/Project/Thumb/20150507/57d5208ffd8e1a11651024415aad821e.jpg!thumb">
	            		</div>
	            		<p class="act_description">#act_description##act_description##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail##act_detail#</p>
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


</html>
