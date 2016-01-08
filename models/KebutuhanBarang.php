<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kebutuhan_barang".
 *
 * @property integer $id_barang
 * @property string $nama_barang
 * @property string $jenis_barang
 * @property string $spesifikasi_barang
 * @property string $tanggal_permintaan_barang
 * @property integer $id
 *
 * @property Users $id0
 */
class KebutuhanBarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kebutuhan_barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nama_barang', 'jenis_barang', 'spesifikasi_barang', 'tanggal_permintaan_barang'], 'string', 'max' => 255],
            [['nama_barang', 'jenis_barang', 'spesifikasi_barang', 'tanggal_permintaan_barang'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'jenis_barang' => 'Jenis Barang',
            'spesifikasi_barang' => 'Spesifikasi Barang',
            'tanggal_permintaan_barang' => 'Tanggal Permintaan Barang',
            'id' => 'User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'id']);
    }
}
