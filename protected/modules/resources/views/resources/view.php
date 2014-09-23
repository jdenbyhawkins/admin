<?php
/* @var $this ResourcesController */
/* @var $model Resources */

$this->breadcrumbs=array(
	'Resources'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Resources', 'url'=>array('index')),
	array('label'=>'Create Resource', 'url'=>array('create')),
	array('label'=>'Update Resource', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Resource', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Resources', 'url'=>array('admin')),
);
?>

<h1>View Resource #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'title',
		'description',
		'notes',
		
		
	),
)); ?>

	<div class="created">
		posted by <a href="mailto:<?php echo $web->created_email;?>" target="_top"> <?php echo $model->created_by ?></a><?php echo ' on ' . date('F j, Y', strtotime($model->created_at)); ?>
	</div>
	<div class="updated">
		updated by <a href="mailto:<?php echo $web->updated_email;?>" target="_top"> <?php echo $model->created_by ?></a><?php echo  ' on ' . date('F j, Y', strtotime($model->updated_at)); ?>
	</div>
	<b>Tags:</b>
		<?php echo implode(', ', $model->tagLinks); ?>
		<br/>

<div id="web">
    ......
    
 
    <?php if($model->webCount>=1): ?>
        <h3>
            <?php echo $model->webCount . 'Url(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('/resources/_webs',array(
            'resources'=>$model,
            'web'=>$model->web,
        )); ?>
    <?php endif; ?>
     
</div><!-- web -->

<div id="book">
    ......
    
 
    <?php if($model->bookCount>=1): ?>
        <h3>
            <?php echo $model->bookCount . 'Hard Copy(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('/resources/_books',array(
            'resources'=>$model,
            'books'=>$model->books,
        )); ?>
    <?php endif; ?>

</div><!-- book -->

<div id="contact">
    ......
    
 
    <?php if($model->contactCount>=1): ?>
        <h3>
            <?php echo $model->contactCount . 'Contact(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('/resources/_contacts',array(
            'resources'=>$model,
            'contacts'=>$model->contacts,
        )); ?>
    <?php endif; ?>

</div><!-- contact -->

<div id="file">
    ......
    
 
    <?php if($model->fileCount>=1): ?>
        <h3>
            <?php echo $model->fileCount . 'File(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('/resources/_files',array(
            'resources'=>$model,
            'files'=>$model->files,
        )); ?>
    <?php endif; ?>

</div><!-- contact -->

<div id="comments">
    <?php if($model->commentCount>=1): ?>
        <h3>
            <?php echo $model->commentCount . 'comment(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('/resources/_comments',array(
            'resources'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>
</div>

<div id="comments">
    ......
    <h3>Leave a Comment</h3>
 
    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/comment/_form',array(
            'model'=>$comment,
        )); ?>
    <?php endif; ?>
 
</div><!-- comments -->
