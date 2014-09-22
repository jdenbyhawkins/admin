<?php foreach($files as $files): ?>
<div class="files" id="<?php echo $files->id; ?>">

	
	<a class="title" href="<?php echo $files->file_path; ?>"><?php echo $files->title; ?></a>
	<div class="description">
		<?php echo $files->description; ?>
	</div>
	<div class="notes">
		<?php echo $files->notes; ?>
	</div>
	<div class="author">
		<?php echo $files->file_author; ?>
	</div>
	<div class="created">
		posted by <a href="mailto:<?php echo $files->created_email;?>" target="_top"> <?php echo $files->created_by ?></a><?php echo ' on ' . date('F j, Y', strtotime($files->created_at)); ?>
	</div>
	<div class="updated">
		updated by <a href="mailto:<?php echo $files->updated_email;?>" target="_top"> <?php echo $files->created_by ?></a><?php echo  ' on ' . date('F j, Y', strtotime($files->updated_at)); ?>
	</div>

	
</div><!-- files -->
<?php endforeach; ?>