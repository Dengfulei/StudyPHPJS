<?php 
$a = "hello ,world";
// explode 通过特殊符号分割字符串返回数组
print_r(explode(',', $a));
//移除出字符串两侧的空格和其要定义的字符
$b = trim(" hello ,world");
echo "<br>";
print_r(trim($a,'hellld'));
echo "<br>";
print_r(ltrim($a,'he'));
echo "<br>";
print_r(rtrim($a,'ld'));

print_r(join("&", array(2,3,4,5)));


echo "<br>";

$c = number_format(2,2);
var_dump($c);
echo "<br>";
// 定义和用法
// number_format() 函数通过千位分组来格式化数字。

// 语法 number要保留的数
// decimals 保留几位小数      可选    
// decimalpoint 小数点的样式  可选
// separator 千位分隔符的样式  可选
// number_format(number,decimals,decimalpoint,separator)
echo number_format("1000000",2,",",".");

var_dump(strval(333333));
var_dump(round(3.2));

echo "<br>";

$bbb = "hello,world";
// $search查找的字符串,$replace替换的字符串,$subject被查找字串
// str_replace(search, replace, subject)
$ddd = str_replace(",", "&", $bbb);
// print_r($ddd)


// print_r(substr_replace($ddd, "shi", 5))


$b2 = "eeeeeee.jpg";
/*strrpos 最后一次出现的位置
	strops 第一次出现的位置
*/
$c2 = strrpos("eeeeeee.jpg", '.');
print_r($c2); 
$cc = substr($b2, $c2);
print_r($cc);

?>