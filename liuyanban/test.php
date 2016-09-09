<?php
//定义常量ACCESS，用来对本页面授权访问include文件夹下的文件
define('ACCESS',true);

//定义常量IS_CONN，用来确定是否连接数据库
define('IS_CONN', true);

//定义一个常量来指定本页的脚本名称
define('SCRIPT', 'register');

//引入公共的包含文件
require dirname(__FILE__).'/include/common.inc.php';


//echo mysql_real_escape_string("fdsafda'fdsa"); //这个函数使用需要先连接数据库



$var = '';

// 结果为 TRUE，所以后边的文本将被打印出来。
if (isset($var)) {
    print "This var is set set so I will print.";
}

// 在后边的例子中，我们将使用 var_dump 输出 isset() 的返回值。

$a = "test";
$b = "anothertest";

var_dump( isset($a) );      // TRUE
var_dump( isset ($a, $b) ); // TRUE

unset ($a);

var_dump( isset ($a) );     // FALSE
var_dump( isset ($a, $b) ); // FALSE

$foo = NULL;
var_dump( isset ($foo) );   // FALSE
?>
<img id="code" alt="" src="code.php" />
