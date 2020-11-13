<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerAddressMappingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-address-mapping-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'llandmark') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'address2') ?>

    <?php // echo $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
