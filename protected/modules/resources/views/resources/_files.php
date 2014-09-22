<?php foreach($files as $files): ?>
<div class="files" id="<?php echo $files->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$files,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'notes',
		'created_at',
		'updated_at',
		'created_by',
		'created_email',
		'updated_by',
		'updated_email',
		//'tags',
		//'task_id',
	),
)); ?>

	
</div><!-- files -->
<?php endforeach; ?>