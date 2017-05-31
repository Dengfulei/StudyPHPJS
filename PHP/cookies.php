<?php  
	
	//user 设置用户名 dfl 用户名的值 time()+3600过期时间
	//删除cookies  time()-3600
	setcookie('user','dfl',time()+3600);
	echo '<a href="date.php">dddddd</a>';
	/*文件的完整路径和文件名*/
	echo __FILE__;
	/*文件所在的目录不包含该文件的文件名*/
	echo dirname(__FILE__);

?>
