<html>
<meta charset="utf-8">
<head>
<title>注册验证</title>
</head>
<body>
<?php
 	//接收bxbz5.htm中的数据
 	$name=$_POST["name"];
 	$sex=$_POST["sex"];
  	$age=$_POST["age"];
  	$password=$_POST["password"];
  	$password1=$_POST["password1"];
  	$like1=$_POST["like1"];
  	$like2=$_POST["like2"];
  	$like3=$_POST["like3"];
  	$like4=$_POST["like4"];
  	$color=$_POST["color"];
  	$jieshao=$_POST["jieshao"];
 	//验证表单数据的合法性
  	if($name==""){
  		echo "===名字不能为空，请<a href=javascript:history.go(-1)>返回</a>重新输入!===";
  		exit;
  	}
  		else if($age<1 or $age>100){
  			echo "===年龄不再0到100之间，请<a href=javascript:history.go(-1)>返回</a>重新输入!===";
  			exit;
 		}
		else if (strlen($password)<4 or strlen($password)>10 or strlen($password1)<4 or strlen($password1)>10 or $password!=$password1){
			echo "===两次密码长度均在4-10之间且要相等，请<a href=javascript:history.go(-1)>返回</a>重新输入!===";
  			exit;
  		}
  		else if($jieshao==""){
  			echo "===个人介绍不能为空，请<a href=javascript:history.go(-1)>返回</a>重新输入!===";
  			exit;
  		}
  		
  ?>
  <p align="center">您的自我介绍信息提交成功，请核对！</p>   
  <table width="508" border="1" align="center" cellpadding="0" cellspacing="0" bord ercolorlight="#000000" bordercolordark="#FFFFFF" id="table1">
  	<tr><td width="113" height="22">名字：</td>
  	<td width="389" height="22"><?php echo $name?></td>
  	</tr><tr>
  	<td height="22">性别：</td><td height="22"><?php echo $sex?></td>
  	</tr><tr>
  	<td height="24">年龄：</td><td height="24"><?php echo $age?></td>
  	</tr><tr>
 	<td>个人密码：</td><td>已设置</td>
	 </tr><tr>
  	 <td>你的爱好：</td>
  		<td>
  		<?php echo $like1."&nbsp;&nbsp;".$like2."&nbsp;&nbsp;".$like3."&nbsp;&nbsp;".$like4."&nbsp;&nbsp;"?></td>
  	 </tr><tr>
  		<td>你最喜欢的颜色：</td><td><?php echo $color?></td>
  	</tr><tr>
  		<td>个人介绍：</td><td><?php echo $jieshao?></td>
 </tr></table>
</body>