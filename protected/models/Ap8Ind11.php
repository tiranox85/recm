<?php

/**
 * This is the model class for table "ap8Ind11".
 *
 * The followings are the available columns in table 'ap8Ind11':
 * @property integer $id
 * @property integer $anio
 * @property integer $mes
 * @property double $p_ocupadas_n_ma
 * @property double $p_ocupadas_df_ma
 * @property double $p_ocupadas_n_me
 * @property double $p_ocupadas_df_me
 * @property double $remuneraciones_n_ma
 * @property double $remuneraciones_df_ma
 * @property double $remuneraciones_me
 * @property double $remuneraciones_df_me
 * @property double $remuneraciones_pp_n_ma
 * @property double $remuneraciones_pp_df_ma
 * @property double $remuneraciones_pp_n_me
 * @property double $remuneraciones_pp_df_me
 * @property double $ingreso_n_ma
 * @property double $ingreso_df_ma
 * @property double $ingreso_n_me
 * @property double $ingreso_df_me
 * @property double $compras_n_ma
 * @property double $compras_df_ma
 * @property double $compras_n_me
 * @property double $compras_df_me
 * @property string $fecha_reg
 * @property string $fecha_mod
 * @property integer $user_reg
 * @property integer $user_mod
 */
class Ap8Ind11 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ap8Ind11';
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
			array('p_ocupadas_n_ma, p_ocupadas_df_ma, p_ocupadas_n_me, p_ocupadas_df_me, remuneraciones_n_ma, remuneraciones_df_ma, remuneraciones_me, remuneraciones_df_me, remuneraciones_pp_n_ma, remuneraciones_pp_df_ma, remuneraciones_pp_n_me, remuneraciones_pp_df_me, ingreso_n_ma, ingreso_df_ma, ingreso_n_me, ingreso_df_me, compras_n_ma, compras_df_ma, compras_n_me, compras_df_me', 'numerical'),
			array('fecha_reg, fecha_mod', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, anio, mes, p_ocupadas_n_ma, p_ocupadas_df_ma, p_ocupadas_n_me, p_ocupadas_df_me, remuneraciones_n_ma, remuneraciones_df_ma, remuneraciones_me, remuneraciones_df_me, remuneraciones_pp_n_ma, remuneraciones_pp_df_ma, remuneraciones_pp_n_me, remuneraciones_pp_df_me, ingreso_n_ma, ingreso_df_ma, ingreso_n_me, ingreso_df_me, compras_n_ma, compras_df_ma, compras_n_me, compras_df_me, fecha_reg, fecha_mod, user_reg, user_mod', 'safe', 'on'=>'search'),
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
			'p_ocupadas_n_ma' => 'P Ocupadas N Ma',
			'p_ocupadas_df_ma' => 'P Ocupadas Df Ma',
			'p_ocupadas_n_me' => 'P Ocupadas N Me',
			'p_ocupadas_df_me' => 'P Ocupadas Df Me',
			'remuneraciones_n_ma' => 'Remuneraciones N Ma',
			'remuneraciones_df_ma' => 'Remuneraciones Df Ma',
			'remuneraciones_me' => 'Remuneraciones Me',
			'remuneraciones_df_me' => 'Remuneraciones Df Me',
			'remuneraciones_pp_n_ma' => 'Remuneraciones Pp N Ma',
			'remuneraciones_pp_df_ma' => 'Remuneraciones Pp Df Ma',
			'remuneraciones_pp_n_me' => 'Remuneraciones Pp N Me',
			'remuneraciones_pp_df_me' => 'Remuneraciones Pp Df Me',
			'ingreso_n_ma' => 'Ingreso N Ma',
			'ingreso_df_ma' => 'Ingreso Df Ma',
			'ingreso_n_me' => 'Ingreso N Me',
			'ingreso_df_me' => 'Ingreso Df Me',
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
		$criteria->compare('p_ocupadas_n_ma',$this->p_ocupadas_n_ma);
		$criteria->compare('p_ocupadas_df_ma',$this->p_ocupadas_df_ma);
		$criteria->compare('p_ocupadas_n_me',$this->p_ocupadas_n_me);
		$criteria->compare('p_ocupadas_df_me',$this->p_ocupadas_df_me);
		$criteria->compare('remuneraciones_n_ma',$this->remuneraciones_n_ma);
		$criteria->compare('remuneraciones_df_ma',$this->remuneraciones_df_ma);
		$criteria->compare('remuneraciones_me',$this->remuneraciones_me);
		$criteria->compare('remuneraciones_df_me',$this->remuneraciones_df_me);
		$criteria->compare('remuneraciones_pp_n_ma',$this->remuneraciones_pp_n_ma);
		$criteria->compare('remuneraciones_pp_df_ma',$this->remuneraciones_pp_df_ma);
		$criteria->compare('remuneraciones_pp_n_me',$this->remuneraciones_pp_n_me);
		$criteria->compare('remuneraciones_pp_df_me',$this->remuneraciones_pp_df_me);
		$criteria->compare('ingreso_n_ma',$this->ingreso_n_ma);
		$criteria->compare('ingreso_df_ma',$this->ingreso_df_ma);
		$criteria->compare('ingreso_n_me',$this->ingreso_n_me);
		$criteria->compare('ingreso_df_me',$this->ingreso_df_me);
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
	 * @return Ap8Ind11 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
