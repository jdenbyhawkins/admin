<?php 
Yii::import('zii.widgets.CPortlet');
 
class ResourceMenu extends CPortlet
{
    public function init()
    {
        $this->title=CHtml::encode('ResourceMenu');
        parent::init();
    }
 
    protected function renderContent()
    {
    	$resource=$this->loadModel();
        $this->render('resourceMenu',array(
	        'model'=>$resource,
	        
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
	        
	    }
	    return $this->_model;
	}
}
