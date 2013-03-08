<?php

class BrandController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	 public function actionIndex()
	{
	    	$sub_content=$this->renderPartial('allbrands', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	                                
	public function actionKarges()
	{
			$sub_content=$this->renderPartial('Karges', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	public function actionHenkel_Harris ()
	{
	     	$sub_content=$this->renderPartial('Henkel_Harris', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	public function actionHenredon()
	{
	     	$sub_content=$this->renderPartial('Henredon', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	public function actionOurhouse()
	{
	     	$sub_content=$this->renderPartial('Ourhouse', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	public function actionMaitland_Smith()
	{
	     	$sub_content=$this->renderPartial('Maitland_Smith', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	public function actionJonathan_Charles()
	{
	     	$sub_content=$this->renderPartial('Jonathan_Charles', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	public function actionEastern_Legend()
	{
	     	$sub_content=$this->renderPartial('Eastern_Legend', array() ,true);
	       	$this->render('index',array('sub_content'=>$sub_content));
	}
	
	
}