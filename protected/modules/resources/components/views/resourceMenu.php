<ul>
    <li><?php echo CHtml::link(CHtml::encode('Create new URL'), array('web/create', 'id'=>$model->id)); ?></li>
    <li><?php echo CHtml::link('Manage Posts',array('post/admin')); ?></li>
    <li><?php echo CHtml::link('Approve Comments',array('comment/index'))
        . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
    <li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>