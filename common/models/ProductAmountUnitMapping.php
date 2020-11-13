<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_amount_unit_mapping".
 *
 * @property integer $id
 * @property integer $unit_id
 * @property integer $amount
 * @property integer $product_id
 * @property integer $weight
 */
class ProductAmountUnitMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_amount_unit_mapping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit_id', 'amount', 'product_id', 'weight'], 'required'],
            [['unit_id', 'amount', 'product_id', 'weight'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unit_id' => 'Unit ID',
            'amount' => 'Amount',
            'product_id' => 'Product ID',
            'weight' => 'Weight',
        ];
    }
}
