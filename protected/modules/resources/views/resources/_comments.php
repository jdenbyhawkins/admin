<?php foreach($comments as $comments): ?>
<div class="comment" id="c<?php echo $comments->id; ?>">

	<?php echo CHtml::link("#{$comments->id}", $comments->getUrl($resources), array(
		'class'=>'cid',
		'title'=>'Permalink to this comment',
	)); ?>

	<div class="author">
		<?php echo $comments->authorLink; ?> says:
	</div>

	<div class="time">
		<?php echo date('F j, Y \a\t h:i a', strtotime($comments->create_time)) ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($comments->content)); ?>
	</div>

</div><!-- comment -->
<?php endforeach; ?>