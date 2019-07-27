<!DOCTYPE html> 
<html> 
<body> 

<h1>My first PHP page</h1> 

<?php 
$x=5; 
$cars=array("Volvo","BMW","Toyota");

function myTest($y) 
{ 
    // $x=10;
    global $x, $cars; // 全局变量, 需要这样引
    $GLOBALS['x'] = 77; // 动态的改变全局变量
    echo "变量 x 为: $x <br>";
    echo "$y <br>"; 
    echo "{$cars[2]}";
    echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;
    $x = 5985;
	var_dump($x);
	$x = -345; // 负数 
	var_dump($x);
	$x = 0x8C; // 十六进制数
	var_dump($x);
	$x = 047; // 八进制数
	var_dump($x);
	echo strlen("Hello world!"); // strlen === length
	echo "<br>";
	echo strpos("Hello world!","world"); // strpos === indexOf
	echo "<br>";
	echo "hello". " " ."world"; // 字符串拼接 === "hello" + " " + "world"
	echo "<br>";
	$cars=array("Volvo","BMW","Toyota");
	echo count($cars); // count === length

	// sort() // 升序
	// rsort() // 降序
	// asort() // 根据数组的值, 对数组进行升序
	// ksort() // 根据数组的键, 对数组进行升序
	// arsort() // 根据数组的值, 对数组进行降序
	// krsort() // 根据数组的键, 对数组进行降序

    for ($o=1; $o<5; $o++) {
        echo 'the number is ' .$o . "<br/>";
    }

    $ay = array("one", "two", "three");
    foreach ($ay as $value) {
        echo '<br/>' .$value .'<br/>';
    }

    // 魔术常量
    echo '第"' . __LINE__ . '"行'; // 行数
    echo '<br/>该文件"' . __FILE__ . '"在哪里'; // 文件位置
    echo '<br/>该文件"' . __DIR__ . '"在哪里'; // 文件夹位置
    echo '<br/>函数名为"' . __FUNCTION__; // 函数名
    echo '<br/>类名为"' . __CLASS__; // 类名


}  

myTest(55); 
?> 

</body> 
</html>