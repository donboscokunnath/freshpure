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

        
}
