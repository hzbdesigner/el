<?php

class BrandController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';

	/**
	 * @return array action filters
	 */
	// public function filters()
	// {
	// 	return array(
	// 		'accessControl', // perform access control for CRUD operations
	// 		'postOnly + delete', // we only allow deletion via POST request
	// 	);
	// }

	// /**
	//  * Specifies the access control rules.
	//  * This method is used by the 'accessControl' filter.
	//  * @return array access control rules
	//  */
	// public function accessRules()
	// {
	// 	return array(
	// 		array('allow',  // allow all users to perform 'index' and 'view' actions
	// 			'actions'=>array('index','view'),
	// 			'users'=>array('*'),
	// 		),
	// 		array('allow', // allow authenticated user to perform 'create' and 'update' actions
	// 			'actions'=>array('create','update'),
	// 			'users'=>array('@'),
	// 		),
	// 		array('allow', // allow admin user to perform 'admin' and 'delete' actions
	// 			'actions'=>array('admin','delete'),
	// 			'users'=>array('admin'),
	// 		),
	// 		array('deny',  // deny all users
	// 			'users'=>array('*'),
	// 		),
	// 	);
	// }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$error=" ";
		if(isset($_POST['Brand']))
		{	
			if( $_POST['Brand'] ){

				$model=new Brand;
				$model->attributes=$_POST['Brand'];
				if($model->save()){
					
					$this->redirect(array('admin'));
				}else{
					$error = '请正确填写文章标题、分类、正文~！';
				}
			}
		}
		$sub_content=$this->renderPartial('create',array(
			'error'=>$error
			),true);
		$this->render('index',array(
			'sub_content'=>$sub_content,
			));
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($bid)
	{
		$model=$this->loadModel($bid);
		$error=" ";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Brand']))
		{
			$model->attributes=$_POST['Brand'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$sub_content=$this->renderPartial('update',array(
			'model'=>$model,
			'error'=>$error,
			),true);
		$this->render('index',array(
			'sub_content'=>$sub_content,
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($bid)
	{
		$this->loadModel($bid)->delete();
		$this->redirect(array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Brand');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

		$param = array(
			'order'=>'bid desc',
		);
		//页码代码写在lists的action中~~~
		$criteria = new CDbCriteria($param);

		//数据
		$brands = Brand::model()->findAll($criteria);
		//$brands = brand::model()->findAll();
		// //渲染
		$sub_content=$this->renderPartial('admin',array(
			'brands'=>$brands,
			),true);
		$this->render('index',array(
			'sub_content'=>$sub_content,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Brand::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='brand-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
