<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'canonical_name',
           
            ['attribute'=>'category',
                'filter'=>['1'=>'Fruits','2'=>'Vegetables'],
                'value'=>function($model){
                    if($model->category=="1"){
                        return 'Fruits';
                    }else{
                        return 'Vegetables';
                    }
                }
            ],
             ['attribute'=>'unit_mst_id',
            'label' => 'Master Unit',
            'filter'=>false,
            'value' => function($model){
                 $data = common\models\UnitMaster::find()->where(['id'=>$model->unit_mst_id])->one();
                 return isset($data->short_name)?$data->short_name:"";
               
            }
            ], 


            
            'min_quantity',
            'price',
            // 'date',
            // 'description:ntext',
            // 'make_top',
            // 'main_image:ntext',
             [   
                'attribute'=>'status',
                'format'=>'raw',//raw,
                'filter'=>['1'=>'Enabled','0'=>'Disabled'],
                'value'=>function($model){
                    if($model->status=="1"){
                     return Html::a('<span class="label label-success">Enabled</span>');
                     } else{
                    return Html::a("<span class='label label-warning'>Disabled</span>");
                     } 
                     
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                                    'header' => 'Update',
                                    'template' => '{update}'],
        ],
    ]); ?>
</div>
