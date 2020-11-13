<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_details".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $user_id
 * @property string $date
 * @property integer $price
 * @property integer $quantity
 * @property string $unit
 * @property integer $status
 * @property integer $discount
 
 */
class OrderDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discount','order_id', 'product_id', 'user_id', 'price', 'quantity', 'unit', 'status'], 'required'],
            [['order_id', 'product_id', 'user_id', 'price', 'quantity', 'status','discount'], 'integer'],
            [['date'], 'safe'],
            [['unit'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'unit' => 'Unit',
            'status' => 'Status',
            'discount'=>'Discount'
        ];
    }
}
