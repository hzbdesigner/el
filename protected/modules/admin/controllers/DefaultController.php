<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$sub_content=$this->renderPartial('login');
		$this->render('index',array('sub_content' =>$sub_content ));
	}
	public function actionAdmin()
	{
		$sub_content=$this->renderPartial('admin');
		$this->render('index',array('sub_content' =>$sub_content ));
	}
}