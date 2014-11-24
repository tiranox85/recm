<?php

/**
 * This is the model class for table "ap1ind1_hist_jorge".
 *
 * The followings are the available columns in table 'ap1ind1_hist_jorge':
 * @property integer $id
 * @property string $periodo
 * @property string $config
 * @property integer $validado
 * @property integer $autorizado
 * @property string $fecha_reg
 * @property integer $user_reg
 */
class Ap1Ind1Hist extends CActiveRecord
{
    public $_archivo;
    public $titulo1;
    public $nota1;
    public $titulo2;
    public $nota2;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ap1Ind1_hist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo1,titulo2, nota1, nota2', 'safe'),
			array('periodo, config, validado, autorizado, activo, fecha_reg, user_reg', 'required'),
			array('validado, autorizado, user_reg', 'numerical', 'integerOnly'=>true),
			//array('periodo, config', 'length', 'max'=>600),
                        array('_archivo', 'file', 'types'=>'xls', "allowEmpty"=>false,'maxSize'=>1024 * 1024 * 2 ,  'tooLarge'=>'Archivo debe ser menor a 2mb', "on"=>"insert"),
                        array('_archivo', 'file', 'types'=>'xls', "allowEmpty"=>true,'maxSize'=>1024 * 1024 * 2,  'tooLarge'=>'Archivo debe ser menor a 2mb', "on"=>"update"),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, periodo, config, validado, autorizado, fecha_reg, user_reg', 'safe', 'on'=>'search'),
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
			'titulo1'=>'Titulo del cuadro',
			'titulo2'=>'Titulo del Gráfico',
			'nota1'=>'Nota',
			'nota2'=>'Nota de Grafico',
			'id' => 'ID',
			'periodo' => 'Periodo',
			'config' => 'config',
			'validado' => 'Validado',
			'autorizado' => 'Autorizado',
			'fecha_reg' => 'Fecha Reg',
			'user_reg' => 'User Reg',
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
		$criteria->compare('periodo',$this->periodo,true);
		$criteria->compare('config',$this->config,true);
		$criteria->compare('validado',$this->validado);
		$criteria->compare('autorizado',$this->autorizado);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('user_reg',$this->user_reg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ap1ind1HistJorge the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getOptions()
{
return CHtml::listData($this->findAll(),'id','periodo');
}
}
