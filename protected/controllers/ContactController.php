<?php

class ContactController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	//
	 public function actionIndex()
	{
	    	$sub_content = $this->renderPartial('/contact/adress' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}


	 public function actionQuanguo()
	{
	    	$sub_content = $this->renderPartial('/contact/quanguo' ,array(),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	
	


}