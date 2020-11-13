<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $caption
 * @property string $image
 * @property string $description
 * @property string $link
 * @property string $button_text
 * @property integer $sort_order
 * @property integer $status
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'image', 'description', 'sort_order', 'status'], 'required','on'=>'oncreate'],
            [['caption', 'description', 'sort_order', 'status'], 'required','on'=>'onupdate'],
            [['image', 'description', 'link'], 'string'],
            // [['link'],'url', 'defaultScheme' => ''],
            [['sort_order', 'status'], 'integer'],
            [['caption'], 'string', 'max' => 250],
            [['button_text'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'image' => 'Image',
            'description' => 'Description',
            'link' => 'Link',
            'button_text' => 'Button Text',
            'sort_order' => 'Sort Order',
            'status' => 'Status',
        ];
    }
      public function upload($file, $id, $name) {

       $targetFolder = \yii::$app->basePath . '/../uploads/banners/' . $id . '/';
        if (!file_exists($targetFolder)) {
            mkdir($targetFolder, 0777, true);
            chmod($targetFolder,0777);
        }
        if ($file->saveAs($targetFolder . 'banner-'.$name . '.' . $file->extension)) {
            chmod($targetFolder . 'banner-'.$name . '.' . $file->extension,0777);
            return true;
        } else {
            return false;
        }
    }
}
