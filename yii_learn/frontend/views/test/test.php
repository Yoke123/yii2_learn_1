<?php 

use yii\jui\DatePicker;
use yii\helpers\Html;
use frontend\widgets\test\Test;

echo "test <br />";

echo DatePicker::widget([
		'language' => 'zh-CN',
		'name' => 'country',
		'attribute' => '日期',
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

getHtmlContents('www.manks.top');
