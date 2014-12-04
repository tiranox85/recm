<?php

/**
 * This is the model class for table "ap5Ind23".
 *
 * The followings are the available columns in table 'ap5Ind23':
 * @property integer $id
 * @property integer $delegacion
 * @property double $unidades
 * @property double $porcentual
 * @property integer $rubro
 * @property integer $anio
 * @property string $fecha_reg
 * @property string $fecha_mod
 * @property integer $user_reg
 * @property integer $user_mod
 */
class Ap5Ind23 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ap5Ind23';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, delegacion, rubro, anio, user_reg, user_mod', 'numerical', 'integerOnly'=>true),
			array('unidades, porcentual', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, delegacion, unidades, porcentual, rubro, anio, fecha_reg, fecha_mod, user_reg, user_mod', 'safe', 'on'=>'search'),
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
			'delegacion' => 'Delegacion',
			'unidades' => 'Unidades',
			'porcentual' => 'Porcentual',
			'rubro' => 'Rubro',
			'anio' => 'Anio',
			'fecha_reg' => 'Fecha Reg',
			'fecha_mod' => 'Fecha Mod',
			'user_reg' => 'User Reg',
			'user_mod' => 'User Mod',
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
		$criteria->compare('delegacion',$this->delegacion);
		$criteria->compare('unidades',$this->unidades);
		$criteria->compare('porcentual',$this->porcentual);
		$criteria->compare('rubro',$this->rubro);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('fecha_mod',$this->fecha_mod,true);
		$criteria->compare('user_reg',$this->user_reg);
		$criteria->compare('user_mod',$this->user_mod);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ap5Ind23 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
