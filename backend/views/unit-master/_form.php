<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UnitMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unit-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>

     <?php echo $form->field($model, 'status')->dropDownList([1 => 'Enable', 0 => 'Disable']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
