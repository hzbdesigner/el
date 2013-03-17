<?php

class ProductController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	 public function actionIndex($bid,$tid)
	{	
		

		$criteria = new CDbCriteria;
		
		$criteria->order='pid DESC';
		
		if($bid != 0){
			
			$criteria->addCondition('bid='.$bid);
		}
		if($tid != 0){
	
			$criteria->addCondition('tid='.$tid);
		}

		$products=Product::Model()->findAll($criteria);
		$brands=Brand::Model()->findAll();
		$ptypes=Ptype::Model()->findAll();
		

       	$this->render('index',array(
       		'products'=>$products,
       		'tid'=>$tid,
       		'bid'=>$bid,
       		'brands'=>$brands,
       		'ptypes'=>$ptypes,
       	));
	}
	
	public function actionView($pid,$tid,$bid)
	{		
	    
		$criteriaAll = new CDbCriteria;
		$criteriaAll->order='pid DESC';
		if($bid != 0){
			
			$criteriaAll->addCondition('bid='.$bid);
		}
		if($tid != 0){
			$criteriaAll->addCondition('tid='.$tid);
		}
		
		$criteria = new CDbCriteria;
		$criteria->order='pid DESC';
		$criteria->addCondition('pid='.$pid);
		

		$products=Product::Model()->findAll($criteriaAll);
		$theproduct=Product::Model()->findAll($criteria);

	    $this->render('view',array(
	    	'prodducts'=>$products,
	    	'theproduct'=>$theproduct,
	    ));
	}

	
}