<!DOCTYPE html>
<html>
<head>
	<title>表格</title>
	
</head>
<body>
	<form method="POST" action="submitAction.php">
	<input type="hidden" name="textOk" value="ok" >
	名字:<input type="text" name="userName">
	<input type="submit" name="submit" value="提交">
	<span> <?php echo $GLOBALS['error']; ?></span>
	<select name="contacts_sex" id="contacts_sex">
             <option>-请选择-</option>
             <option value="1">男</option>
             <option value="2">女</option>
            </select>
	</form>
</body>
</html>