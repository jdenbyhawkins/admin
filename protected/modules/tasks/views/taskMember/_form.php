<?php
/* @var $this TaskMemberController */
/* @var $model TaskMember */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info'); ?>
		<?php echo $form->textField($model,'info',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role'); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'task_id'); ?>
		<?php echo $form->textField($model,'task_id'); ?>
		<?php echo $form->error($model,'task_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_count'); ?>
		<?php echo $form->textField($model,'comment_count'); ?>
		<?php echo $form->error($model,'comment_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resource_count'); ?>
		<?php echo $form->textField($model,'resource_count'); ?>
		<?php echo $form->error($model,'resource_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'book_count'); ?>
		<?php echo $form->textField($model,'book_count'); ?>
		<?php echo $form->error($model,'book_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_count'); ?>
		<?php echo $form->textField($model,'contact_count'); ?>
		<?php echo $form->error($model,'contact_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_count'); ?>
		<?php echo $form->textField($model,'file_count'); ?>
		<?php echo $form->error($model,'file_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'web_count'); ?>
		<?php echo $form->textField($model,'web_count'); ?>
		<?php echo $form->error($model,'web_count'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->