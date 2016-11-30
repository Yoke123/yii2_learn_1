<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
	public function actionTest()
	{	
		//测试测试测试
		return $this->render('test');
	}
}