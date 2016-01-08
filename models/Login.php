<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property integer $id
 * @property string $username
 * @property string $authkey
 * @property string $accessToken
 * @property string $role
 * @property string $password
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'accessToken', 'password'], 'string', 'max' => 255],
            [['authkey'], 'string', 'max' => 50],
            [['role'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'authkey' => 'Authkey',
            'accessToken' => 'Access Token',
            'role' => 'Role',
            'password' => 'Password',
        ];
    }
}
