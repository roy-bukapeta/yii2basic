<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventaris".
 *
 * @property integer $id_inventaris
 * @property integer $id
 * @property string $nama_barang
 * @property string $kode_barang
 * @property string $jenis_barang
 * @property string $tahun_pembelian
 *
 * @property Users $id0
 */
class Inventaris extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

    public static function tableName()
    {
        return 'inventaris';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['file'], 'file'],
            [['nama_barang', 'kode_barang','file','jenis_barang', 'tahun_pembelian'], 'required'],
            [['logo'], 'string','max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                => 'Nama',
            'nama_barang'       => 'Nama Barang',
            'kode_barang'       => 'Kode Barang',
            'file'              => 'Gambar',
            'jenis_barang'      => 'Jenis Barang',
            'tahun_pembelian'   => 'Tahun Pembelian',
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
