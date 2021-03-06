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
	    	$activitys=Activity::model()->findAll();
	    
	       	$sub_content = $this->renderPartial('/activity/all' ,array('activitys'=>$activitys),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//在线活动
	 public function actionAll()
	{	$param = array(
		'order'=>'aid desc',
		);
		$criteria = new CDbCriteria($param);
		$activitys=Activity::model()->findAll($param);
       	$sub_content = $this->renderPartial('/activity/all' ,array('activitys'=>$activitys),true);
       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//在线活动
	 public function actionOnline()
	{
	    $param = array(
			'order'=>'aid desc',
			//'condition'=>'isshow = 1 AND cid = '.$id,
			'condition'=>'tid = 2 ',
		);
		$criteria = new CDbCriteria($param);
		$activitys=Activity::model()->findAll($param);

       	$sub_content = $this->renderPartial('/activity/online' ,array('activitys'=>$activitys),true);
       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//历史活动
	 public function actionHistory()
	{		
	    $param = array(
			'order'=>'aid desc',
			'condition'=>'tid = 3 ',
		);
		$criteria = new CDbCriteria($param);

		$activitys=Activity::model()->findAll($criteria);
       	$sub_content = $this->renderPartial('/activity/history' ,array('activitys'=>$activitys),true);
       	$this->render('index',array('sub_content' =>$sub_content));
	}

	//公司事迹
	 public function actionCompany()
	{		$param = array(
			'order'=>'aid desc',
			'condition'=>'tid = 4',
		);
		$criteria = new CDbCriteria($param);
		$activitys=Activity::model()->findAll($param);
	    
	       	$sub_content = $this->renderPartial('/activity/Company' ,array('activitys'=>$activitys),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//内容
	 public function actionView($aid)
	{		
			$activity = Activity::model()->findByPk($aid);

			//视图
	       	$sub_content = $this->renderPartial('/activity/view' ,array(
	       		'activity'=>$activity
	       	),true);
	       	$this->render('index',array('sub_content' =>$sub_content));
	}
	//hxrs
	// public function actionView( $aid )
	// //整个action应该是发生在点击链接后，传递给controller的是链接的id~
	// {
	// 	$activity = Activity::model()->findByPk( $id );
	// 	//指定id的行，某一篇article~
	// 	$catalogs = Catalog::model()->findAll();
	// 	//所有的catalog，但是catalog是什么？？
	// 	$aside = $this->renderPartial('/news/aside',array(
	// 		'catalogs'=>$catalogs,
	// 		'article'=>$article,
	// 	),true);
		
	// 	$article->readnum += 1;
	// 	$article->save();
		
	// 	$sub_content = $this->renderPartial('view',array(
	// 		'article'=>$article,
	// 	),true);
		
	// 	$this->render('/news/index',array(
	// 		'aside'=>$aside,
	// 		'sub_content'=>$sub_content,
	// 	));
	// }


}