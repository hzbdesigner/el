<?php

class SiteController extends Controller
{
	public $layout='main';

	/**
	 * Declares class-based actions.  actions��ʲô������~~~
	 */
	public function actions()
	{
		return array(
			
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	 public function actionIndex()
	{
	    
	       	$this->render('index');
	}
	
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	public function actionComingsoon()
	{
	   $this->render('comingsoon');
	}



}