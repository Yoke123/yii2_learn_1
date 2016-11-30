<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
	public function actionTest()
	{
		return $this->render('test');
	}
}