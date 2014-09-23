<?php
/* @var $this TaskMemberController */
/* @var $model TaskMember */

$this->breadcrumbs=array(
	'Task Members'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TaskMember', 'url'=>array('index')),
	array('label'=>'Create TaskMember', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#task-member-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Task Members</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'task-member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
		'info',
		'role',
		'created_at',
		/*
		'task_id',
		'comment_count',
		'resource_count',
		'book_count',
		'contact_count',
		'file_count',
		'web_count',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
