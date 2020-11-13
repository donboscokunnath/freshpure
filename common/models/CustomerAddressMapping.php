<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer_address_mapping".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property string $first_name
 * @property string $last_name
 * @property string $llandmark
 * @property string $area
 * @property string $address
 * @property string $province
 * @property string $country
 * @property string $address2
 * @property integer $type
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $password
 */
class CustomerAddressMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    // public $email;
    // public $mobile;
     public $password;
    public static function tableName()
    {
        return 'customer_address_mapping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['email','mobile','customer_id', 'first_name', 'last_name', 'llandmark', 'area', 'address', 'province', 'country', 'address2', 'type'], 'required'],
             [['email','password','mobile', 'first_name', 'last_name', 'llandmark', 'area', 'address', 'province', 'country', 'type'], 'required','on'=>'account_create_frontend'],


            
            ['email', 'unique'],
              ['email', 'email', 'message' => 'Please enter valid email address.'],
            ['mobile', 'unique'],
            [['mobile'], 'number', 'numberPattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/'],
            [['mobile'], 'string', 'min'=>9,'max' => 9,'message' => 'Please enter valid Phone Number.'],
            // +971 9
            [['customer_id', 'type'], 'integer'],
            [['first_name', 'last_name', 'address', 'address2'], 'string', 'max' => 250],
            [['llandmark', 'area', 'province', 'country'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email'=>'Email',
            'mobile'=>'Mobile',
            'customer_id' => 'Customer ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'llandmark' => 'Llandmark',
            'area' => 'Area',
            'address' => 'Address',
            'province' => 'Province',
            'country' => 'Country',
            'address2' => 'Address2',
            'type' => 'Type',
        ];
    }

    public function getCustomerDetails($id){
        $con = \Yii::$app->db;
        $query = 'SELECT CONCAT(first_name," ",last_name) as Name,mobile,email,CONCAT(address, ",<br/>", llandmark, ",<br/>", area,",<br/>",province,",<br/>",country) AS custAddress FROM customer_address_mapping WHERE type =1';
         if($id){
            $query .= " AND customer_id = $id";
         }
        $result = $con->createCommand($query)->queryAll();
        return $result;
    }

    public function getCustomerAddress($id){
        $con = \Yii::$app->db;
        $query = 'SELECT CONCAT(address, ",<br/>", llandmark, ",<br/>", area,",<br/>",province,",<br/>",country) AS custAddress FROM customer_address_mapping WHERE type =2';
         if($id){
            $query .= " AND customer_id = $id";
         }
        $result = $con->createCommand($query)->queryAll();
        return $result;
    }

    public function saveAddress($address,$landmark,$area,$province,$country,$customerId){
        $con = \Yii::$app->db;
        $query = "SELECT COUNT(*) as count FROM customer_address_mapping WHERE customer_id = '$customerId'";
        $result = $con->createCommand($query)->queryAll();
        if($result[0]['count'] < 3){
            $query = "INSERT INTO customer_address_mapping(customer_id,llandmark,area,address,province,country,type) VALUES ('$customerId','$landmark','$area','$address','$province','$country','2')";
            $result = $con->createCommand($query)->execute();
            return $result;
        }else{
            echo '4';
        }
    }
}
