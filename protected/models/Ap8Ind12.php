<?php

/**
 * This is the model class for table "ap8Ind12".
 *
 * The followings are the available columns in table 'ap8Ind12':
 * @property integer $id
 * @property integer $anio
 * @property integer $mes
 * @property double $compras_n_ma
 * @property double $compras_df_ma
 * @property double $compras_n_me
 * @property double $compras_df_me
 * @property string $fecha_reg
 * @property string $fecha_mod
 * @property integer $user_reg
 * @property integer $user_mod
 */
class Ap8Ind12 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ap8Ind12';
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
			array('id, anio, mes, user_reg, user_mod', 'numerical', 'integerOnly'=>true),
			array('compras_n_ma, compras_df_ma, compras_n_me, compras_df_me', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, anio, mes, compras_n_ma, compras_df_ma, compras_n_me, compras_df_me, fecha_reg, fecha_mod, user_reg, user_mod', 'safe', 'on'=>'search'),
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
			'anio' => 'Anio',
			'mes' => 'Mes',
			'compras_n_ma' => 'Compras N Ma',
			'compras_df_ma' => 'Compras Df Ma',
			'compras_n_me' => 'Compras N Me',
			'compras_df_me' => 'Compras Df Me',
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
		$criteria->compare('anio',$this->anio);
		$criteria->compare('mes',$this->mes);
		$criteria->compare('compras_n_ma',$this->compras_n_ma);
		$criteria->compare('compras_df_ma',$this->compras_df_ma);
		$criteria->compare('compras_n_me',$this->compras_n_me);
		$criteria->compare('compras_df_me',$this->compras_df_me);
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
	 * @return Ap8Ind12 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
