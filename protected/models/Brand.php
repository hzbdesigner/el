<?php

/**
 * This is the model class for table "{{brand}}".
 *
 * The followings are the available columns in table '{{brand}}':
 * @property integer $bid
 * @property string $btitle
 * @property string $bdes
 * @property string $bbanner
 * @property string $bsubbanner
 * @property string $bcontent
 *
 * The followings are the available model relations:
 * @property Product $b
 * @property Product[] $products
 */
class Brand extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Brand the static model class
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
		return '{{brand}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('btitle, bdes, bbanner, bsubbanner, bcontent', 'required'),
			array('btitle', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bid, btitle, bdes, bbanner, bsubbanner, bcontent', 'safe', 'on'=>'search'),
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
			'b' => array(self::BELONGS_TO, 'Product', 'bid'),
			'products' => array(self::HAS_MANY, 'Product', 'bid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bid' => 'Bid',
			'btitle' => 'Btitle',
			'bdes' => 'Bdes',
			'bbanner' => 'Bbanner',
			'bsubbanner' => 'Bsubbanner',
			'bcontent' => 'Bcontent',
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

		$criteria->compare('bid',$this->bid);
		$criteria->compare('btitle',$this->btitle,true);
		$criteria->compare('bdes',$this->bdes,true);
		$criteria->compare('bbanner',$this->bbanner,true);
		$criteria->compare('bsubbanner',$this->bsubbanner,true);
		$criteria->compare('bcontent',$this->bcontent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}