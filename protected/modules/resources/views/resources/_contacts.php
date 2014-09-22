<?php foreach($contacts as $contacts): ?>
<div class="book" id="<?php echo $contacts->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$contacts,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
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

	
</div><!-- book -->
<?php endforeach; ?>