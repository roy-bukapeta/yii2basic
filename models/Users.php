<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $nama
 * @property string $email
 * @property integer $no_tlp
 * @property string $alamat
 *
 * @property Inventaris[] $inventaris
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'alamat'], 'string'],
            [['no_tlp'], 'integer'],
            [['nama','email','email','no_tlp','alamat','geojson','type_geometry'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'Nama',
            'nama'          => 'Nama',
            'email'         => 'Email',
            'no_tlp'        => 'No Tlp',
            'alamat'        => 'Alamat',
            'geojson'       => 'Geo Json',
            'type_geometry' => 'Type'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventaris()
    {
        return $this->hasMany(Inventaris::className(), ['id' => 'id']);
    }
}
