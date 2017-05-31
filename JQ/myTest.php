<?php 

/**
 * Define MyClass
 */
class MyClass
{   
    /* 申明属性*/
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public ;
        echo $this->protected;
        echo $this->private;
    }

    /*静态方法个人称之为类方法*/
    public static function test() {
        echo '6666666';
        $obj = new MyClass();
        echo $obj->public;
    }
}
    MyClass::test();
    $obj = new MyClass();
    echo $obj->protected; // 这行不能被正常执行

    $obj->printHello()
/**
  *   类的继承
 */
class MyClass1 extends MyClass
{
    function __construct() {
        echo $this->protected;
    }
    function test() {
        
    }
}
$obj1 = new MyClass1();
$obj1->test();
?>