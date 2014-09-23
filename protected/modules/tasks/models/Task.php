<?php

/**
 * This is the model class for table "{{tasks}}".
 *
 * The followings are the available columns in table '{{tasks}}':
 * @property integer $id
 * @property string $titel
 * @property string $description
 * @property string $notes
 * @property integer $type
 * @property integer $subtask
 * @property integer $related_task
 * @property string $tags
 * @property string $contact_name
 * @property string $contact_email
 * @property integer $priority
 * @property integer $progress
 * @property integer $predecessors_id
 * @property string $start_date
 * @property string $end_date
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $created_email
 * @property string $updated_by
 * @property string $updated_email
 */
class Task extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tasks}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titel, description, notes, type, related_task, tags, contact_name, contact_email, predecessors_id, created_by, created_email, updated_by, updated_email', 'required'),
			array('type, subtask, related_task, priority, progress, predecessors_id', 'numerical', 'integerOnly'=>true),
			array('titel, contact_name, contact_email, created_by, created_email, updated_by, updated_email', 'length', 'max'=>128),
			array('description', 'length', 'max'=>255),
			array('start_date, end_date, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titel, description, notes, type, subtask, related_task, tags, contact_name, contact_email, priority, progress, predecessors_id, start_date, end_date, created_at, updated_at, created_by, created_email, updated_by, updated_email', 'safe', 'on'=>'search'),
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
			'titel' => 'Titel',
			'description' => 'Description',
			'notes' => 'Notes',
			'type' => 'Type',
			'subtask' => 'Subtask',
			'related_task' => 'Related Task',
			'tags' => 'Tags',
			'contact_name' => 'Contact Name',
			'contact_email' => 'Contact Email',
			'priority' => 'Priority',
			'progress' => 'Progress',
			'predecessors_id' => 'Predecessors',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'created_by' => 'Created By',
			'created_email' => 'Created Email',
			'updated_by' => 'Updated By',
			'updated_email' => 'Updated Email',
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
		$criteria->compare('titel',$this->titel,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('subtask',$this->subtask);
		$criteria->compare('related_task',$this->related_task);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('progress',$this->progress);
		$criteria->compare('predecessors_id',$this->predecessors_id);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_email',$this->created_email,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_email',$this->updated_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
