<?php

namespace frontend\controllers;

use Yii;
use DateTime;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;
use frontend\models\LoginForm;
use common\models\CustomerAddressMapping;
/**
 * Site controller
 */
class DashboardController extends Controller {

        /**
         * @inheritdoc
         */
        public function behaviors() {
                return [
                    'access' => [
                        'class' => AccessControl::className(),
                        'rules' => [
                            [
                                'actions' => [],
                                'allow' => true,
                            ],
                            [
                                'actions' => ['dashboard'],
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                        ],
                    ],
                    
                ];
        }

        /**
         * @inheritdoc
         */
        public function actions() {
                return [
                    'error' => [
                        'class' => 'yii\web\ErrorAction',
                    ],
                ];
        }

        public function beforeAction($action) {
            $this->enableCsrfValidation = false;
            return parent::beforeAction($action);
        }

       
        public function actionDashboard() {
            $customerId = Yii::$app->user->identity->id;
            $model = new CustomerAddressMapping();
            $customerDetails = $model->getCustomerDetails($customerId);
            $customerOtherAddress = $model->getCustomerAddress($customerId);
            return $this->render('dashboard',[
                                    'customerDetails' => $customerDetails,'customerOtherAddress' => $customerOtherAddress]);  
            
        }

        public function actionSaveAddress(){
            $post = Yii::$app->request->post();
            $address = $post['address'];
            $landmark = $post['landmark'];
            $area = $post['area'];
            $province = $post['province'];
            $country = $post['country'];
            $customerId = Yii::$app->user->identity->id;
            $model = new CustomerAddressMapping();
            $saveAddress = $model->saveAddress($address,$landmark,$area,$province,$country,$customerId);
        }

        public function actionSaveAddressDefault(){
            $post = Yii::$app->request->post();
            $address = $post['addressId'];
            $customerId = Yii::$app->user->identity->id;
            $model = new CustomerAddressMapping();
            $saveAddress = $model->saveAddressDefault($address,$customerId);
        }

        public function actionGetAddressDetails(){
            $post = Yii::$app->request->post();
            $address = $post['addressId'];
            $customerId = Yii::$app->user->identity->id;
            $model = new CustomerAddressMapping();
            $getAddress = $model->getAddressDetails($address,$customerId);
            return json_encode($getAddress[0]);
        }

        public function actionDeleteAddress(){
            $post = Yii::$app->request->post();
            $id = $post['addressId'];
            $customerId = Yii::$app->user->identity->id;
            $model = new CustomerAddressMapping();
            $getAddress = $model->deleteAddress($id,$customerId);
            return $getAddress;
        }

        public function actionEditAddress(){
            $post = Yii::$app->request->post();
            $address = $post['address'];
            $landmark = $post['landmark'];
            $area = $post['area'];
            $province = $post['province'];
            $country = $post['country'];
            $id = $post['id'];
            $customerId = Yii::$app->user->identity->id;
            $model = new CustomerAddressMapping();
            $editAddress = $model->editAddress($address,$landmark,$area,$province,$country,$customerId,$id);
            echo $editAddress;
        }
}
