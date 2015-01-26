<?php

/**
 * This is the model class for table "shohada".
 *
 * The followings are the available columns in table 'shohada':
 * @property integer $ID
 * @property integer $Firstname
 * @property integer $Lastname
 * @property integer $operation_id
 * @property string $image
 * @property integer $state
 * @property string $city
 * @property string $birth_place
 * @property string $birth_date
 * @property string $education
 * @property string $father_name
 * @property string $Wittness_date
 * @property string $Marital_status
 * @property string $Job
 * @property string $wittness_place
 * @property string $signup_type
 * @property string $Memories
 * @property string $Description
 */
class Shohada extends CFormModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'shohada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, Firstname, Lastname, operation_id, image, state, city, birth_place, birth_date, education, father_name, Wittness_date, Marital_status, Job, wittness_place, signup_type, Memories, Description', 'required'),
			array('ID, Firstname, Lastname, operation_id, state', 'numerical', 'integerOnly'=>true),
			array('image, city, birth_place, education, father_name, Job, wittness_place, signup_type', 'length', 'max'=>50),
			array('Marital_status', 'length', 'max'=>20),
			array('Memories, Description', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Firstname, Lastname, operation_id, image, state, city, birth_place, birth_date, education, father_name, Wittness_date, Marital_status, Job, wittness_place, signup_type, Memories, Description', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'Firstname' => 'Firstname',
			'Lastname' => 'Lastname',
			'operation_id' => 'Operation',
			'image' => 'Image',
			'state' => 'State',
			'city' => 'City',
			'birth_place' => 'Birth Place',
			'birth_date' => 'Birth Date',
			'education' => 'Education',
			'father_name' => 'Father Name',
			'Wittness_date' => 'Wittness Date',
			'Marital_status' => 'Marital Status',
			'Job' => 'Job',
			'wittness_place' => 'Wittness Place',
			'signup_type' => 'Signup Type',
			'Memories' => 'Memories',
			'Description' => 'Description',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('Firstname',$this->Firstname);
		$criteria->compare('Lastname',$this->Lastname);
		$criteria->compare('operation_id',$this->operation_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('birth_place',$this->birth_place,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('father_name',$this->father_name,true);
		$criteria->compare('Wittness_date',$this->Wittness_date,true);
		$criteria->compare('Marital_status',$this->Marital_status,true);
		$criteria->compare('Job',$this->Job,true);
		$criteria->compare('wittness_place',$this->wittness_place,true);
		$criteria->compare('signup_type',$this->signup_type,true);
		$criteria->compare('Memories',$this->Memories,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Shohada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
