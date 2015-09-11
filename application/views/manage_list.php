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
		foreach ($row as $r) {
			//var_dump($r);
			echo <<<TR
			<div class="panel panel-default">
		    <div class="panel-body mod-project-details funding">
TR;

		    echo <<<TR
		    	<div class="clearfix">
TR;
		    echo  "<a href=\"" . base_url('Act/manage') . "/" . $r['a_id'] . "\">";
		    echo <<<TR
		            <span class="ribbon labels" >
TR;
						echo "点我管理";
					echo '</span></a>';
		    
		    		echo '<h1>' . $r['a_name'] . '</h1>';
				echo '</div>';
		    echo "<a href=\"" . base_url('Act/detail') . "/" . $r['a_id'] . "\">";			
		    	echo '<div class="media">';        
		    		echo '<p class="item-img"><img class="lazy pull-left" src="http://p.qsc.dreamore.cn/Uploads/Project/Thumb/20150507/57d5208ffd8e1a11651024415aad821e.jpg!thumb"></p>';
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




	?>
	
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
