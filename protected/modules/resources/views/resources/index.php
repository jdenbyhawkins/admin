<?php
/* @var $this ResourcesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resources',
);

$this->menu=array(
	array('label'=>'Create Resources', 'url'=>array('create')),
	array('label'=>'Manage Resources', 'url'=>array('admin')),
);


if(!empty($_GET['tag'])): ?>
<h1>Resources Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>
 
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items}\n{pager}",
)); ?>
