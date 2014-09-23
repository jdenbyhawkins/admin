<?php
/* @var $this TaskMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Task Members',
);

$this->menu=array(
	array('label'=>'Create TaskMember', 'url'=>array('create')),
	array('label'=>'Manage TaskMember', 'url'=>array('admin')),
);
?>

<h1>Task Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
