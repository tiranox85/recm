<?php

/**
 * This is the model class for table "ap1Ind72".
 *
 * The followings are the available columns in table 'ap1Ind72':
 * @property integer $id
 * @property integer $rubro
 * @property double $valor
 * @property integer $anio
 * @property integer $mes
 * @property integer $columna
 * @property string $fecha_reg
 * @property string $fecha_mod
 * @property integer $user_reg
 * @property integer $user_mod
 *
 * The followings are the available model relations:
 * @property Relaciones $rubro0
 */
class Ap1Ind72 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ap1Ind72';
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
			array('id, rubro, anio, mes, columna, user_reg, user_mod', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rubro, valor, anio, mes, columna, fecha_reg, fecha_mod, user_reg, user_mod', 'safe', 'on'=>'search'),
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
			'rubro0' => array(self::BELONGS_TO, 'Relaciones', 'rubro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rubro' => 'Rubro',
			'valor' => 'Valor',
			'anio' => 'Anio',
			'mes' => 'Mes',
			'columna' => 'Columna',
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
		$criteria->compare('rubro',$this->rubro);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('mes',$this->mes);
		$criteria->compare('columna',$this->columna);
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
	 * @return Ap1Ind72 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
