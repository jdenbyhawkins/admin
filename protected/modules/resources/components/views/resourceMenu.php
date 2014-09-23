<ul>
    <li><?php if(isset($_GET['id'])) echo CHtml::link(CHtml::encode('Create new URL'), array('web/create', 'id'=>$model->id)); ?></li>
    <li><?php if(isset($_GET['id'])) echo CHtml::link(CHtml::encode('Create new Hard Copy'), array('book/create', 'id'=>$model->id)); ?></li>
    <li><?php if(isset($_GET['id'])) echo CHtml::link(CHtml::encode('Create new contact'), array('contact/create', 'id'=>$model->id)); ?></li>
    <li><?php if(isset($_GET['id'])) echo CHtml::link(CHtml::encode('Upload a new file'), array('file/create', 'id'=>$model->id)); ?></li>
</ul>