<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery个性美化select下拉框代码</title>

<style class="cp-pen-styles">
* {
	margin: 0;
	padding: 0;
	border: none;
	list-style: none;
}
body {
	background: #a1ca6c;
	font-family: arial;
	font-size: 13px;
}
form {
	width: 400px;
	padding: 25px 50px 25px 50px;
	background: #84a659;
	display: block;
	margin: 100px auto;
	border-radius: 3px;
	color: #fff;
}
form fieldset {
	margin: 25px 0;
}
.select_wrapper {
	background: #6a8547 url("arrow.png") no-repeat top 15px right 12px;
	line-height: 36px;
	border-radius: 3px;
	cursor: pointer;
	position: relative;
}
.select_wrapper:hover {
	background: #566c3a url("arrow.png") no-repeat top 15px right 12px;
}
.select_wrapper span {
	display: block;
	margin: 0 30px 0 15px;
}
.select_wrapper .select_inner {
	background: #fff;
	border-radius: 5px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
	color: #687278;
	display: none;
	position: absolute;
	left: 0;
	top: -100%;
	width: 100%;
	z-index: 3;
}
.select_wrapper .select_inner li {
	border-bottom: 1px solid #eee;
	padding: 0 15px;
}
.select_wrapper .select_inner li:hover {
	background: #eee;
}
.select_wrapper .select_inner li:last-child {
	border: none;
	border-radius: 0 0 5px 5px;
}
.select_wrapper .select_inner li:first-child {
	border-radius: 5px 5px 0 0;
}
</style>

</head>
<body>

<form action='#' method='post'>
	<fieldset>
		<select class="selectbox" id="" name="">
			<option value="17素材网">17素材网</option>
			<option value="CSS3">CSS3</option>
			<option value="Javascript">Javascript</option>
			<option value="Ruby">Ruby</option>
			<option value="Python">Python</option>
			<option value="C++">C++</option>
		</select>
	</fieldset>
</form>

<script src="<?=base_url('js/jquery-1.10.2.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function (){
	$('.selectbox').wrap('<div class="select_wrapper"></div>')
	$('.selectbox').parent().prepend('<span>'+ $(this).find(':selected').text() +'</span>');
	$('.selectbox').parent().children('span').width($('.selectbox').width());	
	$('.selectbox').css('display', 'none');					
	$('.selectbox').parent().append('<ul class="select_inner"></ul>');
	$('.selectbox').children().each(function(){
		var opttext = $(this).text();
		var optval = $(this).val();
		$('.selectbox').parent().children('.select_inner').append('<li id="' + optval + '">' + opttext + '</li>');
	});

	$('.selectbox').parent().find('li').on('click', function (){
		var cur = $(this).attr('id');
		$('.selectbox').parent().children('span').text($(this).text());
		$('.selectbox').children().removeAttr('selected');
		$('.selectbox').children('[value="'+cur+'"]').attr('selected','selected');
		alert($('.selectbox').children('[value="'+cur+'"]').text());				
		/*console.log($('.selectbox').children('[value="'+cur+'"]').text());*/
	});
	
	$('.selectbox').parent().on('click', function (){
		$(this).find('ul').slideToggle('fast');
	});
});
</script>

</body>
</html>
