<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_email'); ?>
		<?php echo $form->textField($model,'work_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'work_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_email'); ?>
		<?php echo $form->textField($model,'home_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'home_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_number'); ?>
		<?php echo $form->textField($model,'home_number'); ?>
		<?php echo $form->error($model,'home_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_number'); ?>
		<?php echo $form->textField($model,'work_number'); ?>
		<?php echo $form->error($model,'work_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number'); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skype'); ?>
		<?php echo $form->textField($model,'skype',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'skype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->