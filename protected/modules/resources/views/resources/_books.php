<?php foreach($books as $books): ?>
<div class="book" id="<?php echo $books->id; ?>">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$books,
	'attributes'=>array(
		array(               
            'label'=>'Type',
            //'type'=>'label',
            'value'=>Lookup::item('BookType',$books->type)),
		'title',
		'description',
		'book_author',
		'notes',
		
	),
)); ?>

<div class="created">
		posted by <a href="mailto:<?php echo $books->created_email;?>" target="_top"> <?php echo $books->created_by ?></a><?php echo ' on ' . date('F j, Y', strtotime($books->created_at)); ?>
	</div>
	<div class="updated">
		updated by <a href="mailto:<?php echo $books->updated_email;?>" target="_top"> <?php echo $books->created_by ?></a><?php echo  ' on ' . date('F j, Y', strtotime($books->updated_at)); ?>
	</div>

	
</div><!-- book -->
<?php endforeach; ?>