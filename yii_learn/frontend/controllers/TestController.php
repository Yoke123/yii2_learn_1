<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
	public function actionTest()
	{	
		//test 你好 程序
		return $this->render('test');
	}
}