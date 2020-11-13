<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_status_log".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $order_id
 * @property integer $status_id
 * @property integer $remar
 * @property string $date
 */
class OrderStatusLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_status_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'order_id', 'status_id', 'remar'], 'required'],
            [['user_id', 'order_id', 'status_id', 'remar'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'order_id' => 'Order ID',
            'status_id' => 'Status ID',
            'remar' => 'Remar',
            'date' => 'Date',
        ];
    }
}
