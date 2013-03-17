<?php

class ProductController extends Controller
{
	public $layout='main';

	/**
	 * This is the action to handle external exceptions.
	 */
	 public function actionIndex($bid,$tid)
	{	
		//pagination
		$param = array(
		'order'=>'pid desc',
		);
		$criteriaPage = new CDbCriteria($param);
		$count = Product::model()->count( $criteriaPage);
		//echo $count;
		$pages = new CPagination( $count );
		$pages->pageSize =10;
		
		$pages->applyLimit( $criteriaPage );
		$page_num = ceil( $count/$pages->pageSize );
		//echo $page_num;

		//filter
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
       		'pages'=>$pages,
       	));
	}
	
	public function actionView($pid)
	{		
		$criteriaAll = new CDbCriteria;
		$criteriaAll->order='pid DESC';
		
		$products=Product::Model()->findAll($criteriaAll);
		$theproduct=Product::Model()->findByPk($pid);
		// if($products){echo "yes";}else{echo "no";}
		// if($theproduct){echo "yes";}else{echo "no";}

	    $this->render('view',array(
	    	'products'=>$products,
	    	'theproduct'=>$theproduct,
	    ));
	}

	
}