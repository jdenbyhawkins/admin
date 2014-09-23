<?php
/* @var $this TaskMemberController */
/* @var $model TaskMember */

$this->breadcrumbs=array(
	'Task Members'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TaskMember', 'url'=>array('index')),
	array('label'=>'Create TaskMember', 'url'=>array('create')),
	array('label'=>'Update TaskMember', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaskMember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaskMember', 'url'=>array('admin')),
);
?>

<h1>View TaskMember #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'info',
		'role',
		'created_at',
		'task_id',
		'comment_count',
		'resource_count',
		'book_count',
		'contact_count',
		'file_count',
		'web_count',
	),
)); ?>
