<?php
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionTest()
    {
        //test 你好 程序
        return $this->render('test');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
