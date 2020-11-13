<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_master".
 *
 * @property integer $id
 * @property string $category_name
 * @property integer $status
 * @property string $canonical_name
 */
class CategoryMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'status','canonical_name'], 'required'],
            [['status'], 'integer'],
            [['category_name'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'status' => 'Status',
            'canonical_name' => 'Canonical Name'
        ];
    }
}
