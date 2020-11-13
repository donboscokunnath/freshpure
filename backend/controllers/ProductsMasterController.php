<?php

namespace backend\controllers;

use Yii;
use common\models\ProductsMaster;
use common\models\ProductsMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\ProductImageMapping;
use common\models\ProductUnitMaster;
use common\models\ProductAmountUnitMapping;
/**
 * ProductsMasterController implements the CRUD actions for ProductsMaster model.
 */
class ProductsMasterController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProductsMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductsMaster model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProductsMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */


    public function actionCreate()
    {
        $model = new ProductsMaster();
        $model->scenario='oncreate';
 $session = Yii::$app->session;
        if ($model->load(Yii::$app->request->post()))
            {
               
                $file = UploadedFile::getInstance($model, 'main_image');

                $file2 = UploadedFile::getInstances($model, 'subImages');
                //  echo '<pre>';
                // print_r($file2);exit;
                $unitIds=$model->unit_mst_id;
                if ($file) {
                   $model->main_image = $file->extension;     
                }
                $model->unit_mst_id=$model->master_unit;
                if($model->save()) {
                    if ($file) {
                    $model->upload($file, $model->id,$model->id,$model->canonical_name);
                    }
                    
                    foreach ($file2 as $key => $value) {
                      $model2= new ProductImageMapping();
                      $model2->image=$value->extension;
                      $model2->product_id=$model->id; 
                      $model2->sort_order=1;
                      $model2->status=1;
                      $model2->save();
                      $model->upload2($value, $model->id,$model2->id);
                    }
                     

                    // foreach ($unitIds as $key => $value) {
                    //     $model3=new ProductUnitMaster();
                    //     $model3->product_id=$model->id;
                    //     $model3->unit_id=$value;
                    //     $model3->save();
                    // }
                          if(isset($session['arrayList'])){
                   foreach ($session['arrayList'] as $key => $value) {
                          // print_r($value);exit;
                            $model3=new ProductAmountUnitMapping();
                            $model3->product_id=$model->id;
                            $model3->unit_id=$value['unitid'];
                            $model3->amount=$value['amount'];
                            $model3->weight=$value['weight'];
                            $model3->save();
                        }
                      }
                return $this->redirect(['index']);
                }else{print_r($model->getErrors());exit;}
            }
           
        unset($session['arrayList']);
            return $this->render('create', [
                'model' => $model,
            ]);
    }
    // public function actionCreate()
    // {
    //     $model = new ProductsMaster();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     } else {
    //         return $this->render('create', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    /**
     * Updates an existing ProductsMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario='onupdate';
        $images = $model->main_image;
        $session = Yii::$app->session;
        if ($model->load(Yii::$app->request->post()))
            {
              $file = UploadedFile::getInstance($model, 'main_image');

                $file2 = UploadedFile::getInstances($model, 'subImages');
                
                $unitIds=$model->unit_mst_id;
                if ($file!="") {
                   $model->main_image = $file->extension;     
                }else{
                     $model->main_image = $images;
                }

                $model->unit_mst_id=$model->master_unit;
                if($model->save()) {
                    if ($file) {
                    $model->upload($file, $model->id,$model->id,$model->canonical_name);
                    }
                    
                    foreach ($file2 as $key => $value) {
                      $model2= new ProductImageMapping();
                      $model2->image=$value->extension;
                      $model2->product_id=$model->id; 
                      $model2->sort_order=1;
                      $model2->status=1;
                      $model2->save();
                      $model->upload2($value, $model->id,$model2->id);
                    }
                   

                         if(isset($session['arrayList'])){
                   foreach ($session['arrayList'] as $key => $value) {
                          // print_r($value);exit;
                            $model3=new ProductAmountUnitMapping();
                            $model3->product_id=$model->id;
                            $model3->unit_id=$value['unitid'];
                            $model3->amount=$value['amount'];
                            $model3->weight=$value['weight'];
                            $model3->save();
                        }
                      }
                return $this->redirect(['index']);
                }
            }
            return $this->render('update', [
                'model' => $model,
            ]);
    }

    /**
     * Deletes an existing ProductsMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductsMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductsMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductsMaster::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
     public function actionDelete2($id)
    {

        $this->findModel2($id)->delete();

        // return $this->redirect(['index']);
        return $this->redirect(Yii::$app->request->referrer);
    }
      protected function findModel2($id)
        {
            if (($model = ProductImageMapping::findOne($id)) !== null) {
                return $model;
            } else {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }

        public function actionSaveUnitAmount(){
          $post = Yii::$app->request->post();
          $unitId = $post['unitId'];
          $amount = $post['amount'];
          $weight = $post['weight'];
          $session = Yii::$app->session;
          $abc = $session['arrayList'];
          $abc[$unitId]['unitid'] = $unitId;
          $abc[$unitId]['weight'] = $weight;
          $abc[$unitId]['amount'] = $amount;
          $session['arrayList'] = $abc;
          // print_r( $session['arrayList']);exit;
          return 1;
        }
        public function actionDeleteUnitAmount(){
          $post = Yii::$app->request->post();
          $id = $post['id'];
          
          $session = Yii::$app->session;
          $abc = $session['arrayList'];
         
          $abc[$id]['weight'] = '';
          $abc[$id]['amount'] = '';
          $session['arrayList'] = $abc;

          // print_r($session['arrayList'][$id]);exit;
          return 1;
        }


        public function actionDeleteForEdit(){
          $post = Yii::$app->request->post();
          $id = $post['id'];
          $productId=$post['productId'];
          $model=ProductAmountUnitMapping::find()->where(['product_id'=>$productId,'unit_id'=>$id])->one();
          $model->delete();
          return 1;
        }

}
