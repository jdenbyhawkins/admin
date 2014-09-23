<?php

/**
 * This is the model class for table "{{web}}".
 *
 * The followings are the available columns in table '{{web}}':
 * @property integer $id
 * @property integer $type
 * @property string $title
 * @property string $description
 * @property string $notes
 * @property string $article_author
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $created_email
 * @property string $updated_by
 * @property string $updated_email
 * @property integer $resource_id
 * @property string $picture
 */
class Web extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{web}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, title, description, url', 'required'),
			array('type', 'in', 'range'=>array(1,2,3)),
			array('title, article_author, url', 'length', 'max'=>128),
			array('description, picture', 'length', 'max'=>255),
			array('url','url'),
			array('created_at', 'default', 'value' => date('Y-m-d H:i:s'), 'setOnEmpty' => true, 'on' => 'insert'),
            array('notes', 'safe'),

			//array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, title, description, notes, article_author, url, created_at, updated_at, created_by, created_email, updated_by, updated_email', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'title' => 'Title',
			'description' => 'Description',
			'notes' => 'Notes',
			'article_author' => 'Article Author',
			'url' => 'Url',
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
		$criteria->compare('type',$this->type);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('article_author',$this->article_author,true);
		$criteria->compare('url',$this->url,true);
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
	 * @return Web the static model class
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
	        {
	            $this->created_at=date('Y-m-d H:i:s');
	        	$this->created_by=Yii::app()->user->username;
	            $this->created_email=Yii::app()->user->email;
	        }
	        else
	        {
            	$this->updated_at=date('Y-m-d H:i:s');
	        	$this->updated_by=Yii::app()->user->username;
	            $this->updated_email=Yii::app()->user->email;
            }
	        return true;
	    }
	    else
	        return false;
	}
}
