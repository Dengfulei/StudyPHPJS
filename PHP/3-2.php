

<!--文件5-3.php：COOKIE实现用户登录的表单-->
<HTML>
<HEAD>
<TITLE>Array函数的使用</TITLE>
</HEAD>
<BODY>
<?php

  // $arr1=array(0,1,2,3,4);
  // $arr2=array("a"=>0,"b"=>1,"c"=>2,"d"=>3,"e"=>4);
  // echo "\$arr1[0]=".$arr1[0];
  // echo "<br>";
  // echo "\$arr2[\"a\"]=".$arr2["a"];

$servername = "localhost";
$username = "root";
$password = ""; //密码
// // 方法1
// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";
// Create database
$sql = "DROP DATABASE myDB";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
// $conn->close();

$conn = mysql_connect($servername, $username, $password);
if(! $conn )
{
  die('连接错误: ' . mysql_error());
}
echo '连接成功<br />';

// 创建数据库
$sql = 'CREATE DATABASE myDB';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('CREATE数据库失败: ' . mysql_error());
}
echo "数据库 myDB CREATE成功\n";

// 删除表
$sql = "DROP TABLE if exists person";
mysql_select_db( 'myDB' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('数据表DROP失败: ' . mysql_error());
}
echo "数据表DROP成功\n";

// 创建表
$sql = "CREATE TABLE IF NOT EXISTS person(
	f_id INT(6) UNSIGNED AUTO_INCREMENT, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	/*设置主键*/
	PRIMARY KEY (f_id),
	/*独一无二的建*/
	UNIQUE KEY (firstname)
/*COMMENT＝'品论注释'*/
) COMMENT='人'";
mysql_select_db( 'myDB' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('数据表creat失败: ' . mysql_error());
}
echo "数据表creat成功\n";


// f_id字段自增主键 c插入数据
$sql = "INSERT INTO person (firstname, lastname, email)
VALUES ('John10', 'Doe', 'john@example.com'),('John312', 'Doe', 'john@example.com'),('John14', 'Doe', 'john@example.com'),('John15', 'Doe', 'john@example.com')";
mysql_select_db( 'myDB' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('不能插入数据: ' . mysql_error());
} 
 echo "插入数据成功\n";	

// $sql = "SELECT * FROM person where firstname='John4'";
// echo "》》》》》";
// mysql_select_db( 'myDB' );
// echo "＋＋＋＋";
// $result = mysql_query($sql,$conn);

// if(! $result )
// {
//   die('Could not get data: ' . mysql_error());
// } 
// // $arr = mysql_fetch_row($result);
// // print_r($arr);

// // 返回关联数组 可以通过关联的下表寻找 例如$row['firstname']
//  mysql_fetch_assoc($result);

// mysql_fetch_row($result);
// // 返回筛选的总行书行数
// print_r(mysql_num_rows($result));
// // print_r(mysql_fetch_row($result));
// // while ($row = mysql_fetch_row($result)) {
// //  	echo "<br>$row[0]<br>";
 
// // }

// while ($row = mysql_fetch_assoc($result)) {
//  	echo $row['firstname'];
 
// }
// echo "Fetched data successfully\n";
 
mysql_close($conn);

?>
</body>
</HTML>