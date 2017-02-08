<?php
/*
//                            _ooOoo_
//                           o8888888o
//                           88" . "88
//                           (| -_- |)
//                            O\ = /O
//                        ____/`---'\____
//                      .   ' \\| |// `.
//                       / \\||| : |||// \
//                     / _||||| -:- |||||- \
//                       | | \\\ - /// | |
//                     | \_| ''\---/'' | |
//                      \ .-\__ `-` ___/-. /
//                   ___`. .' /--.--\ `. . __
//                ."" '< `.___\_<|>_/___.' >'"".
//               | | : `- \`.;`\ _ /`;.`/ - ` : | |
//                 \ \ `-. \_ __\ /__ _/ .-` / /
//         ======`-.____`-.___\_____/___.-`____.-'======
//                            `=---='
//
//         .............................................
//                  佛祖保佑             永无BUG

//          佛曰:
//                  写字楼里写字间，写字间里程序员；
//                  程序人员写程序，又拿程序换酒钱。
//                  酒醒只在网上坐，酒醉还来网下眠；
//                  酒醉酒醒日复日，网上网下年复年。
//                  但愿老死电脑间，不愿鞠躬老板前；
//                  奔驰宝马贵者趣，公交自行程序员。
//                  别人笑我忒疯癫，我笑自己命太贱；
//                  不见满街漂亮妹，哪个归得程序员？
 */

// declare (strict_types = 1);

use frontend\widgets\test\Test;
use yii\helpers\Html;
use yii\jui\DatePicker;

echo "test <br />";

echo DatePicker::widget([
    'language'      => 'zh-CN',
    'name'          => 'country',
    'attribute'     => '日期',
    'clientOptions' => [
        'dataFormat' => 'yy-mm-dd',
    ],
]);

echo Html::button('button', ['class' => 'btn btn-success']);
echo "<br/>";

echo Test::widget();
echo "<br/>";

// $str = file_get_contents('http://www.manks.top');

function getHtmlContents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
}

// getHtmlContents('www.manks.top');

// echo "坑爹了";

// $aa = "http://www.frs.com/Rs-News/Runescape-Celebration-Lamps-+10%-XP-for-Everyone.html";
// echo urldecode($aa);

// function foo($a)
// {
//     return $a;
// }

// foo(1);

// $this->options['full_name'] =
//     ($this->options['server_relevant']['en_name'] ? $this->options['server_relevant']['en_name'] : reset($this->options['serverorcamp'])['en_name']) . "&nbsp;" . $tmp;

?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    <h1>test</h1>
    <?php //if ($aa): ?>
        <p>This is p tags</p>
    <?php //endif;?>
</body>
</html> -->

<!-- <<<<<<< HEAD
=======
//=_=
>>>>>>> master -->


<?php
error_reporting(E_ERROR);
// error_reporting(E_ALL);
// static $x = "test";

// function myTest()
// {
//     global $x;
//     var_dump($x);
// }

// myTest();
// echo "{$x}", "<br>";

// $arr = [1, 2, 3, 4, 5];
// print_r($arr);
// print_r(reset($arr));
// echo "<br>";
// define("GG", "Hello World!");
// echo GG;
// $arr2 = [6, 7, 8, 9, 10];
// var_dump($arr == $arr2);

// echo count($arr2) . "<br>";
// rsort($arr2);
// foreach ($arr2 as $key => $value) {
//     echo $key . "=>" . $value . "<br>";
// }

// echo "<pre>";
// var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_POST);
// var_dump($_GET);

// $i = 1;
// while ($i <= 10) {
//     echo $i . " ";
//     $i++;
// }

// do {
//     $i++;
//     echo $i . " ";
// } while ($i <= 10);

// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo dirname(__FILE__);
// function fun()
// {
//     echo __FUNCTION__;
// }

/**
 * Trait 例子
 */
class Base
{
    public function sayHello()
    {
        echo "Hello";
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "World!";
    }
}

class MyHello extends Base
{
    use SayWorld;
}

$obj = new MyHello();
$obj->sayHello();

// for ($i = 0; $i < 10; $i++) {
//     echo "<h1>Hello World! o(*≧▽≦)ツ┏━┓</h1>";
// }
$a = "1";
if ($a) {
    echo "{$a}有值。";
}

echo "<br />";

?>

<!-- ==================================================== -->
<br />
<code>
    var i;
    for (i = 0; i < 10; i++) {
        setTimeout(function() {
            console.log(i);
        }, 1000);
    }
    console.log(i + "tt");
</code>

<br />
<kbd>Hello World!</kbd>
<br />
<tt>Hello World!</tt>
<br />
<samp>Hello World!</samp>
<br />
<var>Hello World!</var>

<div>
    <div>
        <h2><kbd>上联：</kbd></h2>
        <h3><kbd>一个项目两台电脑三餐盒饭只为四千工资搞得五脏俱伤六神无主仍然七点起床八点开会处理九个BUG十分辛苦。</kbd></h3>
    </div>

    <div>
        <h2><kbd>下联：</kbd></h2>
        <h3><kbd>十年编程九年加班八面无光忙得七窍生烟到头六亲不认五体投地依旧四处奔波三更半夜只为两个臭钱一生孤苦。</kbd></h3>
    </div>

    <div align="center">
        <h1><kbd>横批：</kbd><kbd>IT人生</kbd></h1>
    </div>
</div>




<script type="text/javascript">
    var i;
    for (i = 0; i < 10; i++) {
        setTimeout(function() {
            console.log(i);
        }, 1000);
    }
    console.log(i + "tt");
</script>


