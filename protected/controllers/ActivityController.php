<?php

class ActivityController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	//
	 public function actionIndex()
	{
	    	$sub_content = $this->renderPartial('/activity/all' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//在线活动
	 public function actionAll()
	{
	    
	       	$sub_content = $this->renderPartial('/activity/all' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//在线活动
	 public function actionOnline()
	{
	    
	       	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//历史活动
	 public function actionHistory()
	{
	    
	       	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//公司事迹
	 public function actionCompany()
	{
	    
	       	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//内容
	 public function actionView()
	{
	       	$sub_content = $this->renderPartial('/activity/view' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}


}