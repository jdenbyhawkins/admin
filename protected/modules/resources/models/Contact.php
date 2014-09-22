<?php

/**
 * This is the model class for table "{{contact}}".
 *
 * The followings are the available columns in table '{{contact}}':
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $company
 * @property string $job_title
 * @property string $work_email
 * @property string $home_email
 * @property integer $home_number
 * @property integer $work_number
 * @property integer $mobile_number
 * @property string $skype
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $created_email
 * @property string $updated_by
 * @property string $updated_email
 * @property integer $resource_id
 * @property string $picture
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{contact}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, lastname', 'required'),
			array('home_number, work_number, mobile_number', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname, company, job_title, work_email, home_email, skype', 'length', 'max'=>128),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstname, lastname, company, job_title, work_email, home_email, home_number, work_number, mobile_number, skype, notes, created_at, updated_at, created_by, created_email, updated_by, updated_email, resource_id, picture', 'safe', 'on'=>'search'),
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
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'company' => 'Company',
			'job_title' => 'Job Title',
			'work_email' => 'Work Email',
			'home_email' => 'Home Email',
			'home_number' => 'Home Number',
			'work_number' => 'Work Number',
			'mobile_number' => 'Mobile Number',
			'skype' => 'Skype',
			'notes' => 'Notes',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'created_by' => 'Created By',
			'created_email' => 'Created Email',
			'updated_by' => 'Updated By',
			'updated_email' => 'Updated Email',
			'resource_id' => 'Resource',
			'picture' => 'Picture',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('work_email',$this->work_email,true);
		$criteria->compare('home_email',$this->home_email,true);
		$criteria->compare('home_number',$this->home_number);
		$criteria->compare('work_number',$this->work_number);
		$criteria->compare('mobile_number',$this->mobile_number);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_email',$this->created_email,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_email',$this->updated_email,true);
		$criteria->compare('resource_id',$this->resource_id);
		$criteria->compare('picture',$this->picture,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
	    if(parent::beforeSave())
	    {
	        if($this->isNewRecord)
	            $this->created_at=time();
	        return true;
	    }
	    else
	        return false;
	}
}
