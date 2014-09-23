<?php
/* @var $this TaskMemberController */
/* @var $model TaskMember */

$this->breadcrumbs=array(
	'Task Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaskMember', 'url'=>array('index')),
	array('label'=>'Manage TaskMember', 'url'=>array('admin')),
);
?>

<h1>Create TaskMember</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>