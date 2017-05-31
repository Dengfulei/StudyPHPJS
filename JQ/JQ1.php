<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.btn1').click(function(){
  	/*
  	
    alert("Text: " + $(".p1").html()); 		//html()包涵标签元素的内容
    alert("Text: " + $(".p1").text());     // text（）不包涵标签元素的纯文本类容

     */

    /* alert("Text:" + $("input[type='text']").val());  //通过type获取元素标签*/
    $("input[type='text']").val(function(i,o){
    	return "hhhhh";
    }) //改变值

	$(this).css({"background-color":"yellow",}).text("你点我了");
	$("p").eq(0).text("我是第0个");
	$("p").eq(1).text("我是第二个");
	$(".p1").remove();//删除被选元素
	$(".p2").empty();//移除被选元素的字元素

  });
  
});
</script>
<style type="text/css">
	/*子选择器选取的是直接子元素，不能是隔代元素*/
	h1 > strong {color:red;}
	/*后代元素选取的是所有子元素包括隔代元素*/
	p  strong {color:red;}

	h1 + p {margin-top:50px;}
	/*h1  p {margin-top:50px;}*/ 

</style>
</head>
<body>
	<p class="p1">这是一段<b>粗体</b>文字</p>
	<button class="btn1">显示文本</button>
	<p class="p2" style="background-color: red">名称: <input type="text" id="test" value="W3Cschool教程"></p>

<h1>This is <strong>very</strong> <strong>very</strong> important.</h1>
<h1>This is <em>really </em><strong>very</strong> important.</h1>
<h1>This is <em>really <strong>very</strong></em> important.</h1>

<p>This is <strong>very</strong> <strong>very</strong> important.</p>
<p>This is <em>really </em><strong>very</strong> important.</p>
<p>This is <em>really <strong>very</strong></em> important.</p>


<h1>This is a heading.</h1>
<p>This is paragraph.</p>
<p>This is paragraph.</p>
<p>This is paragraph.</p>
<p>This is paragraph.</p>
<p>This is paragraph.</p>

</body>
</html>