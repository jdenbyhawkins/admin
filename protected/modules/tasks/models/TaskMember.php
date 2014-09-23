<?php

/**
 * This is the model class for table "{{task_members}}".
 *
 * The followings are the available columns in table '{{task_members}}':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $info
 * @property integer $role
 * @property string $created_at
 * @property integer $task_id
 * @property integer $comment_count
 * @property integer $resource_count
 * @property integer $book_count
 * @property integer $contact_count
 * @property integer $file_count
 * @property integer $web_count
 */
class TaskMember extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{task_members}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, info, role, task_id, comment_count, resource_count, book_count, contact_count, file_count, web_count', 'required'),
			array('role, task_id, comment_count, resource_count, book_count, contact_count, file_count, web_count', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>128),
			array('info', 'length', 'max'=>255),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, info, role, created_at, task_id, comment_count, resource_count, book_count, contact_count, file_count, web_count', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'info' => 'Info',
			'role' => 'Role',
			'created_at' => 'Created At',
			'task_id' => 'Task',
			'comment_count' => 'Comment Count',
			'resource_count' => 'Resource Count',
			'book_count' => 'Book Count',
			'contact_count' => 'Contact Count',
			'file_count' => 'File Count',
			'web_count' => 'Web Count',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('info',$this->info,true);
		$criteria->compare('role',$this->role);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('task_id',$this->task_id);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('resource_count',$this->resource_count);
		$criteria->compare('book_count',$this->book_count);
		$criteria->compare('contact_count',$this->contact_count);
		$criteria->compare('file_count',$this->file_count);
		$criteria->compare('web_count',$this->web_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TaskMember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
