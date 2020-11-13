<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products_master".
 *
 * @property integer $id
 * @property string $name
 * @property string $canonical_name
 * @property integer $category
 * @property integer $unit_mst_id
 * @property integer $min_quantity
 * @property string $price
 * @property string $date
 * @property string $description
 * @property integer $make_top
 * @property string $main_image
 * @property integer $status
 * @property integer $subImages
* @property integer $master_unit
 * @property integer $discount
 */
class ProductsMaster extends \yii\db\ActiveRecord
{
    public $subImages;
    public $master_unit;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discount','unit_mst_id','master_unit','subImages','name', 'category', 'min_quantity', 'price', 'description', 'make_top', 'main_image', 'status'], 'required','on'=>'oncreate'],
            [['name','master_unit','category', 'min_quantity', 'price', 'description', 'make_top', 'status'], 'required','on'=>'onupdate'],
            [['category', 'unit_mst_id', 'min_quantity', 'make_top', 'status','price','discount'], 'integer'],
            [['date'], 'safe'],
            [['description', 'main_image'], 'string'],
            [['name', 'canonical_name'], 'string', 'max' => 250],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'master_unit'=>'Master Unit',
            'subImages'=>'Sub Images',
            'id' => 'ID',
            'name' => 'Name',
            'canonical_name' => 'Canonical Name',
            'category' => 'Category',
            'unit_mst_id' => 'Unit',
            'min_quantity' => 'Min Quantity',
            'price' => 'Price',
            'date' => 'Date',
            'description' => 'Description',
            'make_top' => 'Featured',
            'main_image' => 'Main Image',
            'status' => 'Status',
            'discount'=>'Discount(%)'
        ];
    }
      public function upload($file, $id, $name,$canonicalname="") {

       $targetFolder = \yii::$app->basePath . '/../uploads/products/' . $id . '/main-image/';
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
            chmod($targetFolder,0777);
        };
        // echo $targetFolder .$canonicalname.'-'.$name . '.' . $file->extension;exit;
        if ($file->saveAs($targetFolder .$canonicalname.'-'.$name. '.' . $file->extension)) {
            chmod($targetFolder .$canonicalname.'-'.$name. '.' . $file->extension,0777);
            return true;
        } else {
            return false;
        }
    }

      public function upload2($file, $id, $name) {

       $targetFolder = \yii::$app->basePath . '/../uploads/products/' . $id . '/main-image/sub-images/';
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
            chmod($targetFolder,0777);
        }
        if ($file->saveAs($targetFolder . 'sub-'.$name . '.' . $file->extension)) {
            chmod($targetFolder . 'sub-'.$name . '.' . $file->extension,0777);
            return true;
        } else {
            return false;
        }
    }
}
