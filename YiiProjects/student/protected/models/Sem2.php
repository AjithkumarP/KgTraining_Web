<?php

/**
* This is the model class for table "sem2".
*
* The followings are the available columns in table 'sem2':
    * @property integer $id
    * @property integer $year
    * @property integer $algorithms
    * @property integer $electronics
    * @property integer $maths2
    * @property integer $java
    *
    * The followings are the available model relations:
            * @property Student $id0
    */
class Sem2 extends CActiveRecord
{
/**
* @return string the associated database table name
*/
public function tableName()
{
return 'sem2';
}

/**
* @return array validation rules for model attributes.
*/
public function rules()
{
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
return array(
    array('id, year, algorithms, electronics, maths2, java', 'required'),
    array('id, year, algorithms, electronics, maths2, java', 'numerical', 'integerOnly'=>true),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
array('id, year, algorithms, electronics, maths2, java', 'safe', 'on'=>'search'),
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
    'id0' => array(self::BELONGS_TO, 'Student', 'id'),
);
}

/**
* @return array customized attribute labels (name=>label)
*/
public function attributeLabels()
{
return array(
    'id' => 'ID',
    'year' => 'Year',
    'algorithms' => 'Algorithms',
    'electronics' => 'Electronics',
    'maths2' => 'Maths2',
    'java' => 'Java',
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
		$criteria->compare('year',$this->year);
		$criteria->compare('algorithms',$this->algorithms);
		$criteria->compare('electronics',$this->electronics);
		$criteria->compare('maths2',$this->maths2);
		$criteria->compare('java',$this->java);

return new CActiveDataProvider($this, array(
'criteria'=>$criteria,
));
}

/**
* Returns the static model of the specified AR class.
* Please note that you should have this exact method in all your CActiveRecord descendants!
* @param string $className active record class name.
* @return Sem2 the static model class
*/
public static function model($className=__CLASS__)
{
return parent::model($className);
}
}
