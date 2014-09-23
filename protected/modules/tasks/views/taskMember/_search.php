<?php
/* @var $this TaskMemberController */
/* @var $model TaskMember */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'info'); ?>
		<?php echo $form->textField($model,'info',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<?php echo $form->textField($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_id'); ?>
		<?php echo $form->textField($model,'task_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_count'); ?>
		<?php echo $form->textField($model,'comment_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resource_count'); ?>
		<?php echo $form->textField($model,'resource_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'book_count'); ?>
		<?php echo $form->textField($model,'book_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_count'); ?>
		<?php echo $form->textField($model,'contact_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_count'); ?>
		<?php echo $form->textField($model,'file_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'web_count'); ?>
		<?php echo $form->textField($model,'web_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->