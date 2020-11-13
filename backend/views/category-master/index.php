<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategoryMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'category_name',
             [   
                'attribute'=>'status',
                'format'=>'raw',//raw,
                'filter'=>['1'=>'Enabled','0'=>'Disabled'],
                'filterInputOptions' => ['class' => 'form-control', 'id' => 'leave_status'],
                'value'=>function($model){
                    if($model->status=="1"){
                     return Html::a('<span class="label label-success">Enabled</span>');
                     } else{
                    return Html::a("<span class='label label-danger'>Diabled</span>");
                     }    
                     
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                                    'header' => 'Update',
                                    'template' => '{update}']
                                
        ],
    ]); ?>
</div>
