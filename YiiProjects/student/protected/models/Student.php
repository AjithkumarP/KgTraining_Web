<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $id
 * @property integer $joining
 * @property string $name
 * @property string $phone
 * @property integer $age
 * @property string $gender
 * @property string $father
 * @property string $mother
 * @property string $town
 *
 * The followings are the available model relations:
 * @property Sem1[] $sem1s
 * @property Sem2[] $sem2s
 */
class Student extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'student';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('id, joining, name, phone, age, gender, father, mother, town', 'required'),
            array('id, joining, age', 'numerical', 'integerOnly' => true),
            array('name, father, mother, town', 'length', 'max' => 255),
            array('phone', 'length', 'max' => 20),
            array('gender', 'length', 'max' => 50),
// The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, joining, name, phone, age, gender, father, mother, town', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
// NOTE: you may need to adjust the relation name and the related
// class name for the relations automatically generated below.
        return array(
            'sem1s' => array(self::HAS_MANY, 'Sem1', 'id'),
            'sem2s' => array(self::HAS_MANY, 'Sem2', 'id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'joining' => 'Joining',
            'name' => 'Name',
            'phone' => 'Phone',
            'age' => 'Age',
            'gender' => 'Gender',
            'father' => 'Father',
            'mother' => 'Mother',
            'town' => 'Town',
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
    public function search() {
// @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('joining', $this->joining);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('age', $this->age);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('father', $this->father, true);
        $criteria->compare('mother', $this->mother, true);
        $criteria->compare('town', $this->town, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Student the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
