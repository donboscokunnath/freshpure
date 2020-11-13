<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "unit_master".
 *
 * @property integer $id
 * @property string $unit
 * @property integer $status
 * @property string $short_name
 
 */
class UnitMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unit_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit', 'status','short_name'], 'required'],
            [['status'], 'integer'],
            [['unit','short_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unit' => 'Unit',
            'status' => 'Status',
            'short_name'=>'Short Name'
        ];
    }
}
