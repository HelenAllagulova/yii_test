<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "claim".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $birthdate
 * @property integer $phone
 * @property string $email
 * @property integer $status
 */
class Claim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'claim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'birthdate', 'phone', 'email', 'status'], 'required'],
            [['birthdate'], 'safe'],
            [['phone', 'status'], 'integer'],
            [['name', 'surname', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'birthdate' => 'Birthdate',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }
}
