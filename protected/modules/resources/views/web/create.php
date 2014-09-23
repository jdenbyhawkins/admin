<?php
/* @var $this WebController */
/* @var $model Web */

$this->breadcrumbs=array(
	'Webs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Web', 'url'=>array('index')),
	array('label'=>'Manage Web', 'url'=>array('admin')),
);
?>

<h3>Create a url link</h3>

        <?php $this->renderPartial('/web/_form',array(
            'model'=>$model,
        )); ?>