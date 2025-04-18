<?php

/**
 * This is the model class for table "wilayah".
 *
 * The followings are the available columns in table 'wilayah':
 * @property integer $id
 * @property string $nama_wilayah
 * @property string $tipe_wilayah
 * @property string $kode_wilayah
 *
 * The followings are the available model relations:
 * @property Pasien[] $pasiens
 */
class Wilayah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wilayah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
{
    return array(
        array('nama_wilayah, tipe_wilayah, kode_wilayah', 'required'),
        array('nama_wilayah', 'length', 'max'=>255),
        array('kode_wilayah', 'length', 'max'=>10),
        array('tipe_wilayah', 'in', 'range'=>array('Provinsi','Kabupaten','Kota')),
        array('id, nama_wilayah, tipe_wilayah, kode_wilayah', 'safe', 'on'=>'search'),
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
			'pasiens' => array(self::HAS_MANY, 'Pasien', 'id_wilayah'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_wilayah' => 'Nama Wilayah',
			'tipe_wilayah' => 'Tipe Wilayah',
			'kode_wilayah' => 'Kode Wilayah',
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
		$criteria->compare('nama_wilayah',$this->nama_wilayah,true);
		$criteria->compare('tipe_wilayah',$this->tipe_wilayah,true);
		$criteria->compare('kode_wilayah',$this->kode_wilayah,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wilayah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
