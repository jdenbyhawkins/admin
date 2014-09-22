<?php foreach($books as $books): ?>
<div class="book" id="<?php echo $books->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$books,
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

	
</div><!-- book -->
<?php endforeach; ?>