<?php
/* @var $this TaskMemberController */
/* @var $data TaskMember */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('info')); ?>:</b>
	<?php echo CHtml::encode($data->info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_id')); ?>:</b>
	<?php echo CHtml::encode($data->task_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_count')); ?>:</b>
	<?php echo CHtml::encode($data->comment_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resource_count')); ?>:</b>
	<?php echo CHtml::encode($data->resource_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('book_count')); ?>:</b>
	<?php echo CHtml::encode($data->book_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_count')); ?>:</b>
	<?php echo CHtml::encode($data->contact_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_count')); ?>:</b>
	<?php echo CHtml::encode($data->file_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('web_count')); ?>:</b>
	<?php echo CHtml::encode($data->web_count); ?>
	<br />

	*/ ?>

</div>