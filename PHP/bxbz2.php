<?php  
if (!empty($_POST['name'])) {
	echo "数据不为空";
} else { ?> 

	<form  method="POST" name="myform">
	<table class="table1"  width="508" cellpadding="0" cellspacing="0" align="center" border="1 solid #000000">
	<tr>
	<!-- <td height="22" colspan="3" align="center"><b>自 我 介 绍</b></td> -->
		<td height="22" colspan="3" align="center"><b>自 我 介 绍</b></td>
	</tr>	
	
	<tr>
		<td height="22">名字:</td>
		<td height="22"><input type="text" name="name" size=15 maxlength= onBlur="namecheckdata();"></td>
		<td height="22" width="105">不能为空，只能是字母</td>
	</tr>

	<tr>
		<td height="22">性别：</td>
		<!-- &nbsp为空格 -->
		<td height="22">男<input type="radio" name="sex" value="男" checked="checked">&nbsp;<input type="radio" name="sex" value="女"></td>
		<td height="22" width="105"></td>
	</tr>

	<tr>
		<td height="24">年龄：</td>
		<td height="24"><input type=text name="age" size="12" maxlength="8"></td>
		<td width="105" height="24">不能为空，在0到100之间</td>
	</tr>

	<tr>
		<td>密码:</td>
		<td><input type="password" name="password" size="15" maxlength="15"></td>
		<td width="105">不能为空，4到10位数</td>
	</tr>

	<tr>
		<td>确认密码：</td>
		<td><input type=password name="password1" size=15 maxlength=8></td>
		<td width="105">与个人密码相同</td>
	</tr>

	<tr>
		<td>你的爱好：</td>
		<td>看书<input type="checkbox" name="like1" value="看书">&nbsp;打球<input type="checkbox" name="like2" value="打球">&nbsp;音乐<input type="checkbox" name="like3" value="音乐"></td>
		<td width="105"> </td>		
	</tr>

	<tr>
		<td>妞喜欢的颜色:</td>
		<td><select name="color" size="1">
		<option name="red">红色</option>
		<option name="green" selected="selected">绿色</option>
		<option name="blue">蓝色</option>
		</select></td>
		<td width="105"> </td>	

	</tr>

	<tr>
	    <td>个人介绍：</td>
		<td><textarea class="jieshao1"  name="jieshao" cols="30" rows="5" placeholder="介绍内容"></textarea></td>
		<td width="105">不能为空</td>
	</tr>

	<tr>
	  <td colspan="3" align="center"><input name="submit" type="submit" value="提交">&nbsp;&nbsp;<input name="reset" type="reset" value="重置"></td>
	  </tr>
	</table>
</form>


 <?php }
 


?>



