<?php

/**
 * This is the model class for table "kunjungan".
 *
 * The followings are the available columns in table 'kunjungan':
 * @property integer $id
 * @property integer $id_pasien
 * @property string $tanggal_kunjungan
 * @property string $jenis_kunjungan
 * @property string $keluhan
 * @property string $status_kunjungan
 *
 * The followings are the available model relations:
 * @property Pasien $idPasien
 * @property TransaksiObat[] $transaksiObats
 * @property TransaksiTindakan[] $transaksiTindakans
 * @property Pembayaran[] $pembayarans
 */
class Kunjungan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kunjungan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien', 'numerical', 'integerOnly'=>true),
			array('jenis_kunjungan, status_kunjungan', 'length', 'max'=>20),
			array('tanggal_kunjungan, keluhan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_pasien, tanggal_kunjungan, jenis_kunjungan, keluhan, status_kunjungan', 'safe', 'on'=>'search'),
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
			'idPasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'transaksiObats' => array(self::HAS_MANY, 'TransaksiObat', 'id_kunjungan'),
			'transaksiTindakans' => array(self::HAS_MANY, 'TransaksiTindakan', 'id_kunjungan'),
			'pembayarans' => array(self::HAS_MANY, 'Pembayaran', 'id_kunjungan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_pasien' => 'Id Pasien',
			'tanggal_kunjungan' => 'Tanggal Kunjungan',
			'jenis_kunjungan' => 'Jenis Kunjungan',
			'keluhan' => 'Keluhan',
			'status_kunjungan' => 'Status Kunjungan',
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
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('tanggal_kunjungan',$this->tanggal_kunjungan,true);
		$criteria->compare('jenis_kunjungan',$this->jenis_kunjungan,true);
		$criteria->compare('keluhan',$this->keluhan,true);
		$criteria->compare('status_kunjungan',$this->status_kunjungan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kunjungan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
