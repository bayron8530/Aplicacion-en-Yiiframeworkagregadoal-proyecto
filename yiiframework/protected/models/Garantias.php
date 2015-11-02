<?php

/**
 * This is the model class for table "garantiascpp".
 *
 * The followings are the available columns in table 'garantiascpp':
 * @property integer $ID
 * @property string $Tipo
 * @property string $Marca
 * @property string $Modelo
 * @property string $Serial
 * @property string $Parte_Mala
 * @property string $Fecha_Registro
 * @property string $Fecha_Fin
 * @property string $Observaciones
 */
class Garantias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'garantiascpp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo, Marca, Modelo, Serial, Parte_Mala, Fecha_Registro, Fecha_Fin, Observaciones', 'required'),
			array('Tipo, Marca, Modelo, Serial, Parte_Mala, Observaciones', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Tipo, Marca, Modelo, Serial, Parte_Mala, Fecha_Registro, Fecha_Fin, Observaciones', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'Tipo' => 'Tipo',
			'Marca' => 'Marca',
			'Modelo' => 'Modelo',
			'Serial' => 'Serial',
			'Parte_Mala' => 'Parte Mala',
			'Fecha_Registro' => 'Fecha Registro',
			'Fecha_Fin' => 'Fecha Fin',
			'Observaciones' => 'Observaciones',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('Tipo',$this->Tipo,true);
		$criteria->compare('Marca',$this->Marca,true);
		$criteria->compare('Modelo',$this->Modelo,true);
		$criteria->compare('Serial',$this->Serial,true);
		$criteria->compare('Parte_Mala',$this->Parte_Mala,true);
		$criteria->compare('Fecha_Registro',$this->Fecha_Registro,true);
		$criteria->compare('Fecha_Fin',$this->Fecha_Fin,true);
		$criteria->compare('Observaciones',$this->Observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Garantias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
