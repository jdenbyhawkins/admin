<?php

/**
 * This is the model class for table "{{resources}}".
 *
 * The followings are the available columns in table '{{resources}}':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $created_email
 * @property string $updated_by
 * @property string $updated_email
 * @property string $tags
 * @property integer $task_id
 */
class Resources extends CActiveRecord
{
	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{resources}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description', 'required'),
			
			array('title', 'length', 'max'=>128),
			array('description', 'length', 'max'=>225),
			//array('created_at, updated_at, tags', 'safe'),
			array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/',
            		'message'=>'Tags can only contain word characters.'),
        	array('tags', 'normalizeTags'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, notes, created_at, updated_at, created_by, created_email, updated_by, updated_email, tags, task_id', 'safe', 'on'=>'search'),
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
			'web' => array(self::HAS_MANY, 'Web', 'resource_id',
	            'order'=>'web.created_at DESC'),
			'webCount' => array(self::STAT, 'Web', 'resource_id'),
			'books' => array(self::HAS_MANY, 'Book', 'resource_id',
	            'order'=>'books.created_at DESC'),
			'bookCount' => array(self::STAT, 'Book', 'resource_id'),
			'contacts' => array(self::HAS_MANY, 'Contact', 'resource_id',
	            'order'=>'contacts.created_at DESC'),
			'contactCount' => array(self::STAT, 'Contact', 'resource_id'),
			'files' => array(self::HAS_MANY, 'File', 'resource_id',
	            'order'=>'files.created_at DESC'),
			'fileCount' => array(self::STAT, 'File', 'resource_id'),
			'comments' => array(self::HAS_MANY, 'Comment', 'post_id', 'condition'=>'comments.status='.Comment::STATUS_APPROVED, 
				'order'=>'comments.create_time DESC'),
			'commentCount' => array(self::STAT, 'Comment', 'resource_id', 'condition'=>'status='.Comment::STATUS_APPROVED),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'notes' => 'Notes',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'created_by' => 'Created By',
			'created_email' => 'Created Email',
			'updated_by' => 'Updated By',
			'updated_email' => 'Updated Email',
			'tags' => 'Tags',
			'task_id' => 'Task',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_email',$this->created_email,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_email',$this->updated_email,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('task_id',$this->task_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resources the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function normalizeTags($attribute,$params)
	{
	    $this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
	}
	

	public function getUrl()
    {
        return Yii::app()->createUrl('resources/view', array(
            'id'=>$this->id,
            'title'=>$this->title,
        ));
    }

    protected function beforeSave()
	{
	    if(parent::beforeSave())
	    {
	        if($this->isNewRecord)
	        {
	            $this->created_at=$this->updated_at=time();
	            $this->created_by=Yii::app()->user->username;
	            $this->created_email=Yii::app()->user->email;
	            
	        }
	        else
	        {
	            $this->updated_at=time();
	        	$this->updated_by=Yii::app()->user->username;
	            $this->updated_email=Yii::app()->user->email;
	        }
	        return true;

	    }
	    else
	        return false;
	}
	protected function afterSave()
	{
	    parent::afterSave();
	    Tag::model()->updateFrequency($this->_oldTags, $this->tags);
	}
	 
	private $_oldTags;
	 
	protected function afterFind()
	{
	    parent::afterFind();
	    $this->_oldTags=$this->tags;
	}

	public function addWeb($web)
	{
	    $web->resource_id=$this->id;
	    return $web->save();
	}

	public function addBook($book)
	{
	    $book->resource_id=$this->id;
	    return $book->save();
	}

	public function addContact($contact)
	{
	    $contact->resource_id=$this->id;
	    return $contact->save();
	}

	public function addFile($file)
	{
	    $file->resource_id=$this->id;
	    return $file->save();
	}

	public function addComment($comment)
	{
	    if(Yii::app()->params['commentNeedApproval'])
	        $comment->status=Comment::STATUS_PENDING;
	    else
	        $comment->status=Comment::STATUS_APPROVED;
	    $comment->resource_id=$this->id;
	    return $comment->save();
	}

	
}
