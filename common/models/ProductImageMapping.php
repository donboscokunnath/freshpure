<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_image_mapping".
 *
 * @property integer $id
 * @property string $image
 * @property integer $product_id
 * @property integer $sort_order
 * @property integer $status
 */
class ProductImageMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_image_mapping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'product_id', 'sort_order', 'status'], 'required'],
            [['image'], 'string'],
            [['product_id', 'sort_order', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'product_id' => 'Product ID',
            'sort_order' => 'Sort Order',
            'status' => 'Status',
        ];
    }
}
