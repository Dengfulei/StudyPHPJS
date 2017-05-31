<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<h2>这是一个标题</h2>
<p class="testP">这是一个段落<b>你好</b>。</p>
<p id="insert">这是另一个段落。</p>
<input type="text" class ="test" value="hhh"><br>
<button class="hide">隐藏</button>
<button class="show">显示</button>
<br>
<div class="one" style="width: 100px;height: 100px;display: none;background-color: red"></div>
<br>
<div class="two" style="width: 100px;height: 100px;display: block;background-color: blue"></div>
<button class="func" onclick="myfunction()">函数</button>
<button class="date" onclick="showDate()">
<?php echo "时间"; ?><a href="">hhhh</a> <?php ?>
</button>
<script type="text/javascript">
	
$(document).ready(function(){
  

  $(".hide").click(function(){
    // $("p").hide();
    // $(".two").fadeToggle(0, function(){

    // }) ;
    $(".one").slideUp();
    alert($('.testP').text());
    alert($('.test').val());
    $(".test").val("66666666");
    //元素前面拼接
    $(".testP").append("hello");
    // 元素后面评级
    $(".testP").prepend("nidaye");

  });
  
  $(".show").click(function(){
  	$("p").show();//$('p').attr('style','display:none');
  	$(".one").slideDown();
    alert($('.testP').html());
  window.testCallFun('hell0',call);
  

  });

  function call() {
    alert('world');
  }
});
//JQ简写
// $(function() {

// });

function testCallFun(message,callBack) {
  $('.test').val('444444');
  if (typeof callBack == 'function') {
      callBack();
  } else {
    eval(callBack);
  }
}

function myfunction() {
  alert("mbbb");
  //创建标签元素
  var node = document.createElement('p');
  // 创建标签信息
  var textNode = document.createTextNode('测试信息');
  // 将标签信息添加到标签元素上
  node.appendChild(textNode);
  // 将标签元素添加到（body）
  // document.body.appendChild(node);
  document.getElementById('insert').appendChild(node);


//   var element = document.createElement("div");
// element.className = "message";
// var textNode = document.createTextNode("Hello world!");
// element.appendChild(textNode);
// document.body.appendChild(element);

}

function showDate() {
 document.write(Date());

}

</script>
