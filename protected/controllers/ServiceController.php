<?php

class ServiceController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	//配送
	 public function actionIndex()
	{
	    	$sub_content = $this->renderPartial('peisong' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//保养
	 public function actionBaoyang()
	{
	    
	       	$sub_content = $this->renderPartial('baoyang' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//居家顾问
	 public function actionGuwen()
	{
	    
	       	$sub_content = $this->renderPartial('guwen' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//留言反馈
	 public function actionLiuyan()
	{
	    
	       	$sub_content = $this->renderPartial('liuyan' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}


}