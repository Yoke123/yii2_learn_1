<?php 
namespace console\controllers;

use yii\console\Controller; //需要继承这个控制器

class TestController extends Controller
{	
	/**
	 * yii框架运行脚本 console
	 * cd 到 yii 根目录下面输入：
	 * yii 控制器/方法名
	 * 例如： yii test/test
	 */
	public function actionTest()
	{
		echo "test demo script";
	}
}