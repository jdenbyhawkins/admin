<?php
/* @var $this TaskMemberController */
/* @var $model TaskMember */

$this->breadcrumbs=array(
	'Task Members'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaskMember', 'url'=>array('index')),
	array('label'=>'Create TaskMember', 'url'=>array('create')),
	array('label'=>'View TaskMember', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TaskMember', 'url'=>array('admin')),
);
?>

<h1>Update TaskMember <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>