<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fields".
 *
 * @property integer $id
 * @property integer $forms_id
 * @property string $type
 * @property string $name
 * @property string $value
 * @property string $placeholder
 * @property integer $required
 */
class Fields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['forms_id', 'type', 'name', 'value', 'placeholder', 'required'], 'required'],
            [['forms_id', 'required'], 'integer'],
            [['type', 'name', 'value', 'placeholder'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'forms_id' => 'Forms ID',
            'type' => 'Type',
            'name' => 'Name',
            'value' => 'Value',
            'placeholder' => 'Placeholder',
            'required' => 'Required',
        ];
    }
}
