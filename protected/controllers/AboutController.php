<?php

class AboutController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	//
	 public function actionIndex()
	{
	    	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//公司简介
	 public function actionBrief()
	{
	    
	       	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//企业文化
	 public function actionCulture()
	{
	    
	       	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//公司理念
	 public function actionIdea()
	{
	    
	       	$sub_content = $this->renderPartial('/site/comingsoon' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}


}