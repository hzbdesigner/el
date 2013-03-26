<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $pid
 * @property string $ptitle
 * @property integer $tid
 * @property integer $bid
 * @property string $pdes
 * @property string $pimg
 *
 * The followings are the available model relations:
 * @property Brand $brand
 * @property Brand $b
 * @property Ptype $t
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('ptitle, tid, bid, pdes, pimg', 'required'),
			array('tid, bid', 'numerical', 'integerOnly'=>true),
			array('ptitle', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pid, ptitle, tid, bid, pdes, pimg', 'safe', 'on'=>'search'),
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
			'brand' => array(self::HAS_ONE, 'Brand', 'bid'),
			'b' => array(self::BELONGS_TO, 'Brand', 'bid'),
			't' => array(self::BELONGS_TO, 'Ptype', 'tid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pid' => 'Pid',
			'ptitle' => 'Ptitle',
			'tid' => 'Tid',
			'bid' => 'Bid',
			'pdes' => 'Pdes',
			'pimg' => 'Pimg',
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

		$criteria->compare('pid',$this->pid);
		$criteria->compare('ptitle',$this->ptitle,true);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('bid',$this->bid);
		$criteria->compare('pdes',$this->pdes,true);
		$criteria->compare('pimg',$this->pimg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}