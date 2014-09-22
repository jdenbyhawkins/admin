<?php
/* @var $this ResourcesController */
/* @var $model Resources */

$this->breadcrumbs=array(
	'Resources'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Resources', 'url'=>array('index')),
	array('label'=>'Create Resources', 'url'=>array('create')),
	array('label'=>'View Resources', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Resources', 'url'=>array('admin')),
);
?>

<h1>Update Resources <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>