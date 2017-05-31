<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<title>W3Cschool在线教程(w3cschool.cn)</title> 
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$('#block1').attr('style','display:none');
		// $('#block2').attr('style','display:block');
		$('#block2').show();
	});
});
</script>
</head>
<body>

<button>发送一个 HTTP GET 请求并获取返回结果</button>
<div id="block1">
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
	<h1>nihao1</h1>
</div>
<div id="block2" style="display: none;">
	<h1>word2</h1>
	<h1>word2</h1>
	<h1>word2</h1>
</div>
<div>headerView</div>
</body>
</html>