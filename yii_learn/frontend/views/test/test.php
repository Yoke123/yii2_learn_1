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