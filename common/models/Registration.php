<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'mobile'], 'required'],
            [['name', 'email'], 'string', 'max' => 250],
            [['mobile'], 'string', 'max' => 150],
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
            'email' => 'Email',
            'mobile' => 'Mobile',
        ];
    }
}
