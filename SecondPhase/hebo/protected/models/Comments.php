<?php

/**
 * This is the model class for table "comments".
 *
 * The followings are the available columns in table 'comments':
 * @property string $Topic
 * @property string $Date
 * @property string $Description
 * @property string $writer_email
 */
class Comments extends CFormModel
{
	public $Topic;
	public $Date;
	public $Description;
	public $writer_email;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Topic, Date, Description, writer_email', 'required'),
			array('Topic, writer_email', 'length', 'max'=>100),
			array('Description', 'length', 'max'=>3000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Topic, Date, Description, writer_email', 'safe', 'on'=>'search'),
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
			'Topic' => 'Topic',
			'Date' => 'Date',
			'Description' => 'Description',
			'writer_email' => 'Writer Email',
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

		$criteria->compare('Topic',$this->Topic,true);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('writer_email',$this->writer_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
