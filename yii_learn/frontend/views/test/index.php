<?php 
use yii\helpers\Html;
// chrome 浏览器会拦截xss 火狐不会(其他浏览器估计也不会) 故需要过滤
echo "index page <br/>" . Html::encode($name);