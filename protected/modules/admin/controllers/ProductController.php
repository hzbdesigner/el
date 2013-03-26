<?php

class ProductController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

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
		$msg = false;
		$error = '';
		if(isset($_POST['Product']))
		{	
			if (!empty($_FILES)){ 
				
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['pimg']['name']);
				$ext = strtolower( $fileParts['extension'] ); //文件类型转为小写~~
				
				if ( in_array( $ext ,$fileTypes ) ){   //是否在这个数组中？？
					
					$file_name = 'pimg_'.time().rand(0,999).'.'.$ext;//文件命名，重新名一个名
					$pimg_file_path =  Yii::app()->basePath.'/../images/upload/'.$file_name;//设置存储路径（包括自己的名字）
					move_uploaded_file( $_FILES['pimg']['tmp_name'] , $pimg_file_path);  //拷贝副本，将副本文件存储到新的位置。
					
					$_POST['Product']['pimg'] = 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->baseUrl.'/images/upload/'.$file_name;
					
					
					if( $_POST['Product']['ptitle'] ){
						
						$model=new Product;
						$model->attributes=$_POST['Product'];
						// echo $model->ptitle;
						// echo "1";
						if($model->save()){
							// echo "2";
							$this->redirect(array('admin'));
						}else{
							// echo "3";
							$msg = '保存失败！'; //如果没有保存到数据库的话
							$error = '请正确填写文章标题、分类、正文~！';

						}
					}else{
						$msg = '请填写名称！'; //Product对象没有name属性的话
					}
				}else{
					$msg = '请上传 png/jpg/gif 格式的图片LOGO';//如果上传的文件格式不对的话
				}
			}else{
				$msg = '请上传头像图片'; //如果$_file为空的话
			}	
		}
		
		//数据存储完毕
		$types=Ptype::model()->findAll();
		$brands=Brand::model()->findAll();
		$sub_content=$this->renderPartial('create',array(
			'types'=>$types,
			'brands'=>$brands,
			'error'=>$error,
			// 'model'=>$model,
			'msg'=>$msg,
		),true);

		$this->render('index',array('sub_content'=>$sub_content));
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($pid)
	{
		
		$model=$this->loadModel($pid);
		
		//如果是点击修改进入update，那么跳过if，直接渲染update页面
		//如果是修改后提交，进行update，那么执行if里的，重新存储文件
		$error=" ";
		$msg=" ";
		if(isset($_POST['Product']))
		{	
			if (!empty($_FILES)){ 
				
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['pimg']['name']);
				$ext = strtolower( $fileParts['extension'] ); //文件类型转为小写~~
				
				if ( in_array( $ext ,$fileTypes ) ){   //是否在这个数组中？？
					
					$file_name = 'pimg_'.time().rand(0,999).'.'.$ext;//文件命名，重新名一个名
					$pimg_file_path =  Yii::app()->basePath.'/../images/upload/'.$file_name;//设置存储路径（包括自己的名字）
					move_uploaded_file( $_FILES['pimg']['tmp_name'] , $pimg_file_path);  //拷贝副本，将副本文件存储到新的位置。
					
					$_POST['Product']['pimg'] = 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->baseUrl.'/images/upload/'.$file_name;
					
					if( $_POST['Product']['pimg'] ){echo 'pimg生成' ;}else{ echo 'pimg为空';}
					if( $_POST['Product']['ptitle'] ){
						
						$model->attributes=$_POST['Product'];
						if($model->save()){
							
							$this->redirect(array('admin'));
						}else{
							$msg = '保存失败！'; //如果没有保存到数据库的话
							$error = '请正确填写文章标题、分类、正文~！';

						}
					}else{
						$msg = '请填写名称！'; //Product对象没有name属性的话
					}
				}else{
					$msg = '请上传 png/jpg/gif 格式的图片LOGO';//如果上传的文件格式不对的话
				}
			}else{
				$msg = '请上传头像图片'; //如果$_file为空的话
			}	
		}
		
		$types=Atype::model()->findAll();
		$brands=Brand::model()->findAll();
		$sub_content=$this->renderPartial('update',array(
			'types'=>$types,
			'error'=>$error,
			'model'=>$model,
			'brands'=>$brands,
			'msg'=>$msg,
		),true);

		$this->render('index',array('sub_content'=>$sub_content));
		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($pid)
	{
		$this->loadModel($pid)->delete();
		$this->redirect(array('admin'));
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		// if(!isset($_GET['ajax']))
		// 	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		// $dataProvider=new CActiveDataProvider('Product');
		// $this->render('index',array(
		// 	'dataProvider'=>$dataProvider,
		// ));
		$this->render('index');
	}

	/**
	 * Manages all models.
	 */
public function actionAdmin()
	{
		
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$param = array(
			'order'=>'pid desc',
		);
		//页码代码写在lists的action中~~~
		$criteria = new CDbCriteria($param);
		//记录总数
		$count = Product::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 20;
		$pages->applyLimit( $criteria );
		$page_num = ceil( $count/$pages->pageSize );

		//数据
		$products = Product::model()->findAll($criteria);
		//$products = product::model()->findAll();
		// //渲染
		$sub_content=$this->renderPartial('admin',array(
			'products'=>$products,
			'pages' => $pages,
			'current_page' => $current_page,
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
		$model=Product::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
