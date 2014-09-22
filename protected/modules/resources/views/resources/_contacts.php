<?php foreach($contacts as $contacts): ?>
<div class="contacts" id="<?php echo $contacts->id; ?>">



	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$contacts,
	'attributes'=>array(
		//'id',
		'firstname',
		'lastname',
		'company',
		'job_title',
		'work_email',
		'home_email',
		'home_number',
		'work_number',
		'mobile_number',
		'skype',
		'notes:html',
	),
)); ?>
	<div class="created">
		posted by <a href="mailto:<?php echo $contacts->created_email;?>" target="_top"> <?php echo $contacts->created_by ?></a><?php echo ' on ' . date('F j, Y', strtotime($contacts->created_at)); ?>
	</div>
	<div class="updated">
		updated by <a href="mailto:<?php echo $contacts->updated_email;?>" target="_top"> <?php echo $contacts->created_by ?></a><?php echo  ' on ' . date('F j, Y', strtotime($contacts->updated_at)); ?>
	</div>

	
</div><!-- book -->
<?php endforeach; ?>