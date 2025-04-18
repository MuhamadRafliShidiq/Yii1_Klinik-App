<?php

/**
 * This is the model class for table "pembayaran".
 *
 * The followings are the available columns in table 'pembayaran':
 * @property integer $id
 * @property integer $id_kunjungan
 * @property string $total_tagihan
 * @property string $jumlah_bayar
 * @property string $tanggal_bayar
 * @property string $status_pembayaran
 *
 * The followings are the available model relations:
 * @property Kunjungan $idKunjungan
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kunjungan', 'numerical', 'integerOnly'=>true),
			array('total_tagihan, jumlah_bayar', 'length', 'max'=>12),
			array('status_pembayaran', 'length', 'max'=>20),
			array('tanggal_bayar', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_kunjungan, total_tagihan, jumlah_bayar, tanggal_bayar, status_pembayaran', 'safe', 'on'=>'search'),
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
			'idKunjungan' => array(self::BELONGS_TO, 'Kunjungan', 'id_kunjungan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_kunjungan' => 'Id Kunjungan',
			'total_tagihan' => 'Total Tagihan',
			'jumlah_bayar' => 'Jumlah Bayar',
			'tanggal_bayar' => 'Tanggal Bayar',
			'status_pembayaran' => 'Status Pembayaran',
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
		$criteria->compare('id_kunjungan',$this->id_kunjungan);
		$criteria->compare('total_tagihan',$this->total_tagihan,true);
		$criteria->compare('jumlah_bayar',$this->jumlah_bayar,true);
		$criteria->compare('tanggal_bayar',$this->tanggal_bayar,true);
		$criteria->compare('status_pembayaran',$this->status_pembayaran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
