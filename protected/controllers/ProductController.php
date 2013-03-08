<?php

class ProductController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	 public function actionIndex()
	{
	    
	       	$this->render('index');
	}
	
	public function actionView()
	{
	    
	       	$this->render('view');
	}

	
}