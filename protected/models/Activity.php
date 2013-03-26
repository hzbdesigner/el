<?php

/**
 * This is the model class for table "{{activity}}".
 *
 * The followings are the available columns in table '{{activity}}':
 * @property integer $aid
 * @property string $atitle
 * @property string $acontent
 * @property integer $tid
 *
 * The followings are the available model relations:
 * @property Atype $t
 */
class Activity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Activity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{activity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('atitle, acontent, tid ,apic ,ades', 'required'),
			array('tid', 'numerical', 'integerOnly'=>true),
			array('atitle', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('aid, atitle, acontent, tid ,apic ,ades', 'safe', 'on'=>'search'),
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
			// 'atpye' => array(self::BELONGS_TO, 'Atype', 'tid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'aid' => 'Aid',
			'atitle' => 'Atitle',
			'acontent' => 'Acontent',
			'tid' => 'Tid',
			'apic' => 'Apic',
			'ades' => 'Ades',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('aid',$this->aid);
		$criteria->compare('atitle',$this->atitle,true);
		$criteria->compare('acontent',$this->acontent,true);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('apic',$this->apic);
		$criteria->compare('ades',$this->ades);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}