<?php
$a = array('a' => 'Apple:' ,'b' => 'banana' , 'c' => 'Coconut');

///序列化之后转base64 防止对象中包涵双引号、单引号或冒号等字符在反序列化出现问题
$s = base64_encode(serialize($a));
print_r($s);
echo '<br>';
//先base64解码后在反序列化
$e = unserialize(base64_decode($s));
print_r($e);
echo "<br>";
//base64 之后可能会增加字符串的长度，为了防止问题的出现
$f = base64_encode(gzcompress(serialize($a)));
echo $f;
$g = unserialize(gzuncompress(base64_decode($f)));
echo "<br>";
print_r($g);

$str = "ddddd你好，dddd";imap_utf8($str);
  
 echo  utf8_encode($str);
/*返回你好在str中的开始位置*/
echo '.....'.strpos($str, '啊').'.....';
if (strpos($str, '啊')) {
	echo "包涵";
} else {
	echo "不包含";
}
/*更具特殊符号进行分割返回数组*/
$sperArray = explode('，', $str);
print_r($sperArray);
/*strlen 计算字符串的长度，以字符计算*/
/*utf-8 下一个汉字3个字符*/
/*gbk 下一个汉字2个字符*/
echo strlen($str).'<br>';
/*
 *mb_internal_encoding()获取内部编码格式
*/
echo mb_internal_encoding();
/*默认utf-8*/
echo mb_strlen($str).'<br>';//等价于echo mb_strlen($str,'utf-8')
$str = str_replace('好', 'hello', $str);
echo $str;


echo "=====================";
$sort_array1 = array(1,5,3,7,2);
/*升序*/
sort($sort_array1);
print_r($sort_array1);
/*降序*/
rsort($sort_array1);
print_r($sort_array1);
$sort_array2 = array('a'=>'3','f'=>'10','c'=>'5','b'=>'1');
/*关联键将序*/
krsort($sort_array2);
/*关联键升序 */
ksort($sort_array2);
echo '<br>';
print_r($sort_array2);
/*数组的value进行将序*/
arsort($sort_array2);
/*数组的value进行升序*/
asort($sort_array2);
echo '<br>';
print_r($sort_array2);
echo "=========================";

$age=array("Bill"=>"60","Steve"=>"56","Mark"=>"31","David"=>"35");

/*array_chunk(array,size,preserve_key) 见数组分割成多个数组，每个数组个为size个 ，preserve_key=true 保留蓝来的键，faalse不保留默认012*/
print_r(array_chunk($age, 2,true));
print_r(array_chunk($age, 2,false));
echo "===========================";
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill',
    'last_name' => 'Gates',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve',
    'last_name' => 'Jobs',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark',
    'last_name' => 'Zuckerberg',
  )
);
/*array_column 获取多维数组中某一列键对应的值返回数组*/
$aa =array_column($a, 'first_name');
print_r("======".$aa);
/*array_column 获取多维数组中某一列键对应的值返回数组 id对应的值作为新的键 */
/*id 为多位数组中对应的某一键*/
$bb=array_column($a, 'first_name','id');
print_r($bb);
/*array_fill(index,number,value); index其实下表位置 ，number数组个数 ，value数组址*/
$bbb = array_fill(0, 6, 'red');
print_r($bbb);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
/*array_splice删除后填充*/
array_splice($a1,0,1,$a2);
echo "===========".'<br>';
print_r($a1);
echo "<br>";
print_r(array_splice($a1,0,2,$a2));

/*统计数组中values出现的次数*/
$value_count = array(12,22,33,44);
/*array_count_values只能计算字符串和整型的值*/
print_r(array_count_values($value_count));
echo '<br>';


   $current =  date('Y',time());
   var_dump(intval($current));


?>