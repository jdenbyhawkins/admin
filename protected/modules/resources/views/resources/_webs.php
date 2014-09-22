<?php foreach($web as $web): ?>
<div class="web" id="<?php echo $web->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$web,
	'attributes'=>array(
		'type',
		'title',
		'description',
		'url',
		'notes',
		'article_author',
	
	),
)); ?>

	<div class="created">
		posted by <a href="mailto:<?php echo $web->created_email;?>" target="_top"> <?php echo $web->created_by ?></a><?php echo ' on ' . date('F j, Y', strtotime($web->created_at)); ?>
	</div>
	<div class="updated">
		updated by <a href="mailto:<?php echo $web->updated_email;?>" target="_top"> <?php echo $web->created_by ?></a><?php echo  ' on ' . date('F j, Y', strtotime($web->updated_at)); ?>
	</div>

	
</div><!-- web -->
<?php endforeach; ?>