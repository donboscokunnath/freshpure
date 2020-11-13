<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_unit_master".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $unit_id
 */
class ProductUnitMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_unit_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'unit_id'], 'required'],
            [['product_id', 'unit_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'unit_id' => 'Unit ID',
        ];
    }
}
