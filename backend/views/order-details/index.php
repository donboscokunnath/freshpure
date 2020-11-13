<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\ProductsMaster;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrderDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?= Html::a('Create Order Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?php if($msg = 1){?>
        <div class="alert alert-success alert-dismissable">
             <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
             <h4><i class="icon fa fa-check"></i>Success!</h4>
             Order Status Updated
        </div>
    <?php }else if($msg = 2){?>
        <div class="alert alert-danger alert-dismissable">
             <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
             <h4><i class="icon fa fa-check"></i>Error!</h4>
             Error in Order Status Updation plz try again
        </div>
    <?php }?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'order_id',
            [   
                'header'=>'Product',
                'attribute'=>'product_id',
                'format'=>'raw',//raw,
                'value' => function($model){
                    return ($model->product_id != null)?
                    $model->productsDetails->name:'';
                },
                'filter'=>ArrayHelper::map(ProductsMaster::find()->asArray()->all(), 'id', 'name'),
                'filterInputOptions' => ['class' => 'form-control', 'id' => 'product_id'],
            ],
            'user_id',
            [   
                'header'=>'Date',
                'attribute'=>'date',
                'format'=>'raw',//raw,
                'value' => function($model){
                    return date('d-m-Y',strtotime($model->date));
                }
            ],
            // 'price',
            // 'quantity',
            // 'unit',
            [   
                'header'=>'Status',
                'attribute'=>'status',
                'format'=>'raw',//raw,
                'filter'=>['1'=>'Pending','2'=>'Confirmed','3'=>'Shipped','4'=>'Completed'],
                'value' => function($model){
                    if($model->status == 1){
                        return 'Pending';
                    }elseif($model->status == 2){
                        return 'Confirmed';
                    }elseif($model->status == 3){
                        return 'Shipped';
                    }elseif ($model->status == 4) {
                        return 'Completed';
                    }else{
                        return '';
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'view',
                'template' => '{view}',
            ],
        ],
    ]); ?>
</div>
<?php $this->registerJs("
setTimeout(function(){ yourCurrentUrl = 'index';
    window.history.pushState({}, '', yourCurrentUrl );}, 3000);
")
?>