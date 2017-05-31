<html>
<head>
<meta charset="utf-8">
<title>删除 MySQL 数据库</title>
</head>
<body>
<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
	echo "000000000";
   die('连接失败: ' . mysql_error());
 }
echo '连接成功<br />';
$sql = 'DROP DATABASE W3CSCHOOL';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('删除数据库失败: ' . mysql_error());
}
echo "数据库 W3CSCHOOL 删除成功\n";
mysql_close($conn);
?>
</body>
</html>