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
                                'actions' => ['dashboard'],
                                'allow' => true,
                            ],
                            [
                                'actions' => [],
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
          
         return $this->render('dashboard');  
            
        }

        
}
