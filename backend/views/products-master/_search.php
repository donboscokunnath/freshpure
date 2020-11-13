<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'canonical_name') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'unit_mst_id') ?>

    <?php // echo $form->field($model, 'min_quantity') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'make_top') ?>

    <?php // echo $form->field($model, 'main_image') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
