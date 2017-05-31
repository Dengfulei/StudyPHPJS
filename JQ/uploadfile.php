

<?php 
	/**
	* 
	*/
	date_default_timezone_set('Asia/Shanghai');
	echo '<a href="test.php?op=index">aaa</a>';

	class UploadFileControl 
	{
		public static function showpage($layout)
		{
			include_once($layout);
		}

		public function commonOp(){
			echo "我是测试数据";
		}

	}
	
		UploadFileControl:: showpage('inputFile.php');
		print_r($_POST['form_submit']);
		if (isset($_POST['form_submit'])) {
			/*$_FILES['file']['name']图片暂存临时路径图*/
			$uploadfile = $_FILES['file'];
			if (!is_uploaded_file($uploadfile['tep_name'])) {
				move_uploaded_file($uploadfile['tep_name'], $uploadfile['file']['name']);
			} 
			
		} else {
		}
	

	// echo "<br>";
	// // 获取文件路径
		
	// echo date('Y-m-d h-m-s',time());
 	

 // 		$json_array = array('a'=> array('a' => 1,'b'=>2 ),'b'=>1,'c'=>1,'d'=>1,'e'=>1,);
 //        $json = json_encode($json_array);
 //        var_dump($json);
 //        // 解码为对象类型
 //        $b = json_decode($json);
 //        // 访问对象的值->
 //        var_dump($b->a);
 //        echo "<br>";

 //        $c = json_decode($json,true);
 //         var_dump($c['a']);
 //        exit();


?>