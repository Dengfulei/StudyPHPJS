<?php

/**
 * date(format,timestamp)
 */
// 获取当前时间的时间戳 秒为单位
$current_timestamp = time();
echo $current_timestamp;

// 当前日期 默认为服务器的时间
date_default_timezone_set("Asia/Shanghai");
// y/m/d/h/i/s a am/pm上午下午 A大写
$current_date = date('Y/m/d h:i:sa');
echo $current_date;

// 默认为当前时间戳
$stamp = mktime();
echo $stamp;
$stamp = mktime(10,10,10,10,20,1989);
echo "<br>";
echo $stamp;
// 明天
$tommorrow = mktime(0,0,0,date('m'),date('d')+1,date('Y'));
echo date('Y/m/d h:i:s',$tommorrow);


/**
  * 函数用于把人类可读的字符串转换为 Unix 时间。
  * April 月份为英文可以显示正常
  */
$d = strtotime('10:38pm April 15 2015');
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
echo "<br>".$d;

/*下一个月next
  下个星期天next Sunday
 */
$e = strtotime("next Months");
echo date("Y-m-d h:i:sa", $e) . "<br>";
/*
	next 指下个即将到来的星期所在的日期
	last 指过去最近的上一个
 */
$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

if (isset($_COOKIE['user'])) {
	echo $_COOKIE['user'];
}

?>