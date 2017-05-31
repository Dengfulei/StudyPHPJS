<?php 

//统一ACTION
$_GET['act'] = preg_match('/^[\w]+$/i',$_GET['act']) ? $_GET['act'] : 'index';
$_GET['op'] = preg_match('/^[\w]+$/i',$_GET['op']) ? $_GET['op'] : 'index';
// $act = isset($_GET['act'])?$_GET['act']:'';
// print_r($act);
function index(){

	echo '<a href="HH/hhh.php">点我</a>';
}

$a = date_default_timezone_get();
var_dump($a);
$_GET['act']();
$_GET['op']();
?>
	