<?php 

use yii\jui\DatePicker;
echo "test <br />";

echo DatePicker::widget([
		'language' => 'zh-CN',
		'name' => 'country',
		'clientOptions' => [
			'dataFormat' => 'yy-mm-dd',
		],
]);