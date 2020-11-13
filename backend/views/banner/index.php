<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'caption',
             [
              'attribute' => 'image',
               'value' => function($model) {
                if ($model->image != '' && $model->id != "") {
                     return '<img width="100" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../uploads/banners/'. $model->id.'/banner-'.$model->id.'.'.$model->image . '" />';
                    }else{
                    return '';
                     }
                },
                 'format'=>'raw',
                ],
            'description:ntext',
            'link:ntext',
            'button_text',
            'sort_order',
            // 'status',

                ['class' => 'yii\grid\ActionColumn',
                                    'header' => 'Update',
                                    'template' => '{update}'],
                                ['class' => 'yii\grid\ActionColumn',
                                    'header' => 'Delete',
                                    'template' => '{delete}'],
        ],
    ]); ?>
</div>
