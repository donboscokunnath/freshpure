<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hospital_clinic_details".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property integer $type
 * @property string $phone_number
 * @property string $email
 * @property integer $have_diagnostic_center
 * @property integer $master_hospital_id
 * @property integer $same_as_hospital_details_flag
 * @property string $address
 * @property integer $pincode
 * @property string $street1
 * @property string $street2
 * @property string $city
 * @property string $area
 * @property string $latitude
 * @property string $longitude
 * @property integer $status
 * @property integer $package_id
 * @property integer $created_by
 * @property integer $commision_type
 * @property integer $commision
 */
class HospitalClinicDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospital_clinic_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'email', 'status', 'created_by'], 'required'],
            [['user_id', 'type', 'have_diagnostic_center', 'master_hospital_id', 'same_as_hospital_details_flag', 'pincode', 'status', 'package_id', 'created_by', 'commision_type', 'commision'], 'integer'],
            [['address'], 'string'],
            [['name', 'city', 'area'], 'string', 'max' => 150],
            [['phone_number'], 'string', 'max' => 20],
            [['email', 'street1', 'street2', 'latitude', 'longitude'], 'string', 'max' => 250],
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
            'name' => 'Name',
            'type' => 'Type',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'have_diagnostic_center' => 'Have Diagnostic Center',
            'master_hospital_id' => 'Master Hospital ID',
            'same_as_hospital_details_flag' => 'Same As Hospital Details Flag',
            'address' => 'Address',
            'pincode' => 'Pincode',
            'street1' => 'Street1',
            'street2' => 'Street2',
            'city' => 'City',
            'area' => 'Area',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'status' => 'Status',
            'package_id' => 'Package ID',
            'created_by' => 'Created By',
            'commision_type' => 'Commision Type',
            'commision' => 'Commision',
        ];
    }
}
