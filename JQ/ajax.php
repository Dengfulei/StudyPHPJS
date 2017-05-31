<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
  		
  		$(".ajax").click(function(){
			
			$.get("form.html",
				function(data,status){
				$('#sign').html(data);	
				
			});


			$.get("http://www.tutorialspoint.com/json/data.json",
				function(data,status){
			alert("数据: " + data + "\n状态: " + status);
		});
			/*
			var person = '{ "firstname": "John", "lastname": "Doe", "age": "50", "eyecolor": "blue" }';

  		    var resobj = JSON.parse(person);
 
			var json = eval('(' + person + ')');
  		    // alert(json.firstname);
			var data = $.parseJSON(person)
			*/


			
			// var fruits = ["Banana", "Orange", "Apple", "Mango"];
			// /*join()将数组用字符串组成分割组成字符串*/
		 //    $(this).text(fruits.join("$"));

		 //    var a = 'hhhhhhhhhh$dfdfdfd$dsfdsf';
		 //    /*分割成数组*/
		 //    alert(a.split("$")[0]);


		});

  	});

	function week() {
		// 设置星期几
		// var d = new Date();
		// // document.write(d);
		// var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
		// $('.ajax').text(d.getDay());
		 var d =new Date();
 		 var s = d.toISOString();
 		 alert(s);
	}
Date.prototype.Format = function (fmt) { //author: meizz
var o = {
"M+": this.getMonth() + 1, //月份
"d+": this.getDate(), //日
"h+": this.getHours(), //小时
"m+": this.getMinutes(), //分
"s+": this.getSeconds(), //秒
"q+": Math.floor((this.getMonth() + 3) / 3), //季度
"S": this.getMilliseconds() //毫秒
};
if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
for (var k in o)
if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
return fmt;
}


/** * 对Date的扩展，将 Date 转化为指定格式的String * 月(M)、日(d)、12小时(h)、24小时(H)、分(m)、秒(s)、周(E)、季度(q)
可以用 1-2 个占位符 * 年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字) * eg: * (new
Date()).pattern("yyyy-MM-dd hh:mm:ss.S")==> 2006-07-02 08:09:04.423
* (new Date()).pattern("yyyy-MM-dd E HH:mm:ss") ==> 2009-03-10 二 20:09:04
* (new Date()).pattern("yyyy-MM-dd EE hh:mm:ss") ==> 2009-03-10 周二 08:09:04
* (new Date()).pattern("yyyy-MM-dd EEE hh:mm:ss") ==> 2009-03-10 星期二 08:09:04
* (new Date()).pattern("yyyy-M-d h:m:s.S") ==> 2006-7-2 8:9:4.18
*/
//HH 24，hh 12
Date.prototype.pattern=function(fmt) {
var o = {
"M+" : this.getMonth()+1, //月份
"d+" : this.getDate(), //日
"h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //小时
"H+" : this.getHours(), //小时
"m+" : this.getMinutes(), //分
"s+" : this.getSeconds(), //秒
"q+" : Math.floor((this.getMonth()+3)/3), //季度
"S" : this.getMilliseconds() //毫秒
};
var week = {
"0" : "/u65e5",
"1" : "/u4e00",
"2" : "/u4e8c",
"3" : "/u4e09",
"4" : "/u56db",
"5" : "/u4e94",
"6" : "/u516d"
};
if(/(y+)/.test(fmt)){
fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
}
if(/(E+)/.test(fmt)){
fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "/u661f/u671f" : "/u5468") : "")+week[this.getDay()+""]);
}
for(var k in o){
if(new RegExp("("+ k +")").test(fmt)){
fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
}
}
return fmt;
}


</script>
</head>
<body>
	<div id="sign"></div>
	<button class="ajax">ajax请求</button>
</body>
</html>

