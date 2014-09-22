<?php foreach($web as $web): ?>
<div class="web" id="<?php echo $web->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$web,
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

	
</div><!-- web -->
<?php endforeach; ?>