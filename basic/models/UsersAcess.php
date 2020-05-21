<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_acess".
 *
 * @property int $id
 * @property string $last_login
 * @property int $Users_id
 *
 * @property Users $users
 */
class UsersAcess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_acess';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_login', 'Users_id'], 'required'],
            [['last_login'], 'safe'],
            [['Users_id'], 'integer'],
            [['Users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['Users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_login' => 'Last Login',
            'Users_id' => 'Users ID',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'Users_id']);
    }
}
