<?php

class ResourcesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
	public function actionView()
	{
	    $resource=$this->loadModel();
	    $web=$this->newWeb($resource);
	    $book=$this->newBook($resource);
	    $contact=$this->newContact($resource);
	    $file=$this->newFile($resource);
	    $comment=$this->newComment($resource);
	 
	    $this->render('view',array(
	        'model'=>$resource,
	        'web'=>$web,
	        'book'=>$book,
	        'contact'=>$contact,
	        'file'=>$file,
	        'comment'=>$comment,
	    ));
	}
	 
	private $_model;
	 
	public function loadModel()
	{
	    if($this->_model===null)
	    {
	        if(isset($_GET['id']))
	        {
	            $this->_model=Resources::model()->findByPk($_GET['id']);
	        }
	        if($this->_model===null)
	            throw new CHttpException(404,'The requested page does not exist.');
	    }
	    return $this->_model;
	}

	protected function newWeb($resource)
	{
	    $web=new Web;
 
	    if(isset($_POST['ajax']) && $_POST['ajax']==='web-form')
	    {
	        echo CActiveForm::validate($resource);
	        Yii::app()->end();
	    }
	 
	    if(isset($_POST['Web']))
	    {
	        $web->attributes=$_POST['Web'];
	        if($resource->addWeb($web))
	        {
	            $this->refresh();
	        }
	    }
	    return $web;
	}

	protected function newBook($resource)
	{
	    $book=new Book;
 
	    if(isset($_POST['ajax']) && $_POST['ajax']==='book-form')
	    {
	        echo CActiveForm::validate($resource);
	        Yii::app()->end();
	    }
	 
	    if(isset($_POST['Book']))
	    {
	        $book->attributes=$_POST['Book'];
	        if($resource->addWeb($book))
	        {
	            $this->refresh();
	        }
	    }
	    return $book;
	}

	protected function newContact($resource)
	{
	    $contact=new Contact;
 
	    if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form')
	    {
	        echo CActiveForm::validate($resource);
	        Yii::app()->end();
	    }
	 
	    if(isset($_POST['Contact']))
	    {
	        $contact->attributes=$_POST['Contact'];
	        if($resource->addContact($contact))
	        {
	            $this->refresh();
	        }
	    }
	    return $contact;
	}

	protected function newFile($resource)
	{
	    $file=new File;
 
	    if(isset($_POST['ajax']) && $_POST['ajax']==='file-form')
	    {
	        echo CActiveForm::validate($resource);
	        Yii::app()->end();
	    }
	 
	    if(isset($_POST['File']))
	    {
	        $file->attributes=$_POST['File'];
	        if($resource->addFile($file))
	        {
	            $this->refresh();
	        }
	    }
	    return $file;
	}

	protected function newComment($resource)
	{
	    $comment=new Comment;
 
	    if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
	    {
	        echo CActiveForm::validate($comment);
	        Yii::app()->end();
	    }
	 
	    if(isset($_POST['Comment']))
	    {
	        $comment->attributes=$_POST['Comment'];
	        if($resource->addComment($comment))
	        {
	            if($comment->status==Comment::STATUS_PENDING)
	                Yii::app()->user->setFlash('commentSubmitted','Thank you for your comment. Your comment will be posted once it is approved.');
	            $this->refresh();
	        }
	    }
	    return $comment;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Resources;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Resources']))
		{
			$model->attributes=$_POST['Resources'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Resources']))
		{
			$model->attributes=$_POST['Resources'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		/*this is the blog demo version of the action delete method
		if(Yii::app()->request->isPostRequest)
	    {
	        // we only allow deletion via POST request
	        $this->loadModel()->delete();
	 
	        if(!isset($_GET['ajax']))
	            $this->redirect(array('index'));
	    }
	    else
	        throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		
		*/
	}

	protected function afterDelete()
	{
	    parent::afterDelete();
	    //Comment::model()->deleteAll('resource_id='.$this->id);
	    Tag::model()->updateFrequency($this->tags, '');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria(array(
        'order'=>'updated_at DESC',
        'with'=>'commentCount',
	    ));
	    if(isset($_GET['tag']))
	        $criteria->addSearchCondition('tags',$_GET['tag']);
	 
	    $dataProvider=new CActiveDataProvider('Resources', array(
	        'pagination'=>array(
	            'pageSize'=>10,
	        ),
	        'criteria'=>$criteria,
	    ));
	 
	    $this->render('index',array(
	        'dataProvider'=>$dataProvider,
	    ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Resources('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Resources']))
			$model->attributes=$_GET['Resources'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	

	/**
	 * Performs the AJAX validation.
	 * @param Resources $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='resources-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
