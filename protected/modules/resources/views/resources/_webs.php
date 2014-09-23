<?php foreach($web as $web): ?>
<div class="web" id="<?php echo $web->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$web,
	'attributes'=>array(
		array(               
            'label'=>'Type',
            //'type'=>'label',
            'value'=>Lookup::item('WebType',$web->type)),
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
		<?php if($web->updated_at!==null){ ?> <a href="mailto:<?php echo $web->updated_email;?>" target="_top"> <?php echo $web->updated_by ?></a><?php echo  ' on ' . date('F j, Y', strtotime($web->updated_at)); } ?>
	</div>
	<div class="edit">
		<?php echo CHtml::link(CHtml::encode('Update'), array('web/update', 'id'=>$web->id)); ?>
		<?php echo CHtml::link('Delete',"#", array("submit"=>array('web/delete', 'id'=>$web->id), 'confirm' => 'Are you sure?')); ?>
	</div>
	

	
</div><!-- web -->
<?php endforeach; ?>