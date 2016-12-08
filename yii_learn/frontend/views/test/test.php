<?php 

use yii\jui\DatePicker;
use yii\helpers\Html;

echo "test <br />";

echo DatePicker::widget([
		'language' => 'zh-CN',
		'name' => 'country',
		'clientOptions' => [
			'dataFormat' => 'yy-mm-dd',
		],
]);

echo Html::button('button', ['class' => 'btn btn-success']);