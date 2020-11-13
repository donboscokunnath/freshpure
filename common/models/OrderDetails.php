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

    public function getOrderStatus($status){
        if($status == 1){
            return 'Pending';
        }elseif($status == 2){
            return 'Confirmed';
        }elseif($status == 3){
            return 'Shipped';
        }elseif ($status == 4) {
            return 'Completed';
        }else{
            return '';
        }
    }

    public function getProductsDetails() {
        return $this->hasOne(ProductsMaster::className(), ['id' => 'product_id']);
    }
    public function getProductsUnitDetails() {
        return $this->hasOne(UnitMaster::className(), ['id' => 'unit']);
    }

    public function updateOrderStatus($userId,$orderId,$status,$remark)
    {
        $con = \Yii::$app->db;
        $transaction = $con->beginTransaction();
        $query = "UPDATE order_details SET status = '$status' where order_id = '$orderId' AND user_id = '$userId';";
        $result = $con->createCommand($query)->execute();
        if($result){
            $insert = "INSERT INTO order_status_log(user_id,order_id,status_id,remar,date)VALUES('$userId','$orderId','$status','$remark',now());";
            $result1 = $con->createCommand($insert)->execute();
            if($result1){
                $transaction->commit();
                return 1;
            }else{
                $transaction->rollback();
                return 0;
            }
        }else{
            $transaction->rollback();
            return 0;
        }
        
    }
}
