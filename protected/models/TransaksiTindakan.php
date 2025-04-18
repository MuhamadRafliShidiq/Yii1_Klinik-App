<?php

/**
 * This is the model class for table "transaksi_tindakan".
 *
 * The followings are the available columns in table 'transaksi_tindakan':
 * @property integer $id
 * @property integer $id_kunjungan
 * @property integer $id_tindakan
 * @property integer $jumlah
 * @property string $total_harga
 *
 * The followings are the available model relations:
 * @property Kunjungan $idKunjungan
 * @property Tindakan $idTindakan
 */
class TransaksiTindakan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_tindakan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kunjungan, id_tindakan, jumlah', 'numerical', 'integerOnly'=>true),
			array('total_harga', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_kunjungan, id_tindakan, jumlah, total_harga', 'safe', 'on'=>'search'),
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
			'idTindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
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
			'id_tindakan' => 'Id Tindakan',
			'jumlah' => 'Jumlah',
			'total_harga' => 'Total Harga',
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
		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('total_harga',$this->total_harga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiTindakan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
