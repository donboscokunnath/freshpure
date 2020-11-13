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
use common\models\Banner;
use common\models\CategoryMaster;
use common\models\CustomerAddressMapping;
use common\models\Login;
/**
 * Site controller
 */
class SiteController extends Controller {

        /**
         * @inheritdoc
         */
        public function behaviors() {
                return [
                    'access' => [
                        'class' => AccessControl::className(),
                        'rules' => [
                            [
                                'actions' => ['index','login','register','logout'],
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

       
        public function actionIndex() {
          $banners=Banner::find()->where(['status'=>1])->orderBy(['sort_order'=>SORT_ASC])->all();  
          $category=CategoryMaster::find()->where(['status'=>1])->all();
          return $this->render('index', ['banners' => $banners,'category'=>$category]);  
            
        }

        public function actionLogin() {
            $model = new LoginForm();
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                 return $this->goBack();
            }else{
                 return $this->render('login', ['model' => $model]);
            }
        }   
        public function actionRegister() {
            $model=new CustomerAddressMapping();
            $model2=new Login();
            $model->scenario = 'account_create_frontend';
        if ($model->load(Yii::$app->request->post())) {
          
            $model2->auth_key = '123';
            $model2->password = Yii::$app->getSecurity()->hashData($model->password, $model2->auth_key);
            $model2->type = 1;
            $model2->mobile = $model->mobile;
            if($model2->save()){
                $model->customer_id = $model2->id;
                $model->type = 1;
                if($model->save())
                {
    
                    Yii::$app->session->setFlash('success', 'Registration Success... Please Login');
                    return $this->redirect('login');
                }else {
                    $this->findModel($model->customer_id)->delete();
                        return $this->render('register', [
                            'model' => $model,
                        ]);
                    }
            }
        } else {
            return $this->render('register', [
                'model' => $model,
            ]);
        }
        }     


        protected function findModel($id)
    {
        if (($model = Login::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionLogout() {

                Yii::$app->user->logout();

                return $this->goHome();
        }
}
