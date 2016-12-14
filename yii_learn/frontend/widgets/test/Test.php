<?php 
namespace frontend\widgets\test;

use frontend\widgets\Widget;

class Test extends Widget
{
	public function run()
	{
		parent::run();
		return $this->render('test');
	}
}