<?php 
/*
	$servername = "139.224.128.41";
	$username = "hianto2o";
	$password = "MmSZv2aLuGoMMcFItQuB2kg9FcEkQ6K"; //密码
	$conn = mysql_connect($servername, $username, $password);
	if(! $conn )
	{
	  	die('连接错误: ' . mysql_error());
	} else  { ?>
    	<div>
    		<h2> <?php echo '连接成功<br />'; ?></h2>
    	</div>  
    <?php }

	$sql = 'SELECT store_name,member_truename FROM hiant_orders,hiant_member WHERE buyer_id IN (2,3,52)';
	mysql_select_db('hianto2o');
	// $sql = 'SELECT store_name, buyer_name FROM hiant_orders WHERE order_id IN (SELECT order_id FROM hiant_order_goods)';
	$result = mysql_query($sql,$conn);
	if (! $result) {
		die(var_dump($result));
	}
	while ($row = mysql_fetch_array($result)) {
			var_dump($row);
			?> <br>  <?php
	}
	mysql_close($conn);

    echo '该文件位于 “ '  . __DIR__ . ' ” '; */

 /* 	{ ?> 
  	 	<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
		 <button onclick="test('xiaoming','html')">Try it</button>
			<h1 class ="demo"></h1>
		<script>
		var test = function (name,job)
			{
			alert("Welcome " + name + ", the " + job);

			}

			function my(name,job){
				return "Welcome " + name + ", the " + job;
			}
			document.getElementsByClassName('demo')[0].innerHTML = my('xiaoming','html');
		</script>
		</body>
		</html>
  	  <?php }*/




/* $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
 var_dump($tomorrow);*/

 
 // echo mb_strlen('航海走一两', 'utf-8');
 
 $arr = array('w'=>'hello','e'=>'end');
 if (count($arr) <= 0) {
 	foreach ($arr as $key => $value) { ?> 
 	<div>
 		<span><?php echo $key.$value; ?> </span>
 	</div>
	
	
 	<?php } 
 } 	else { ?> 
	
	<span>3333</span>
	<span>3333</span>
	<span>3333</span>

 	<?php }
?>




