<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php
    $form = ActiveForm::begin(
                    ['options' => ['enctype' => 'multipart/form-data']], [
                'fieldConfig' => [
                    'options' => [
                        'tag' => false,
                    ],
                ],
    ]);
    ?>

    <?= $form->field($model, 'caption')->textInput(['maxlength' => true]) ?>

      <?=
    $form->field($model, 'image')->widget(FileInput::classname(), [
     'pluginOptions' => ['previewFileType' => 'any',
         'allowedFileExtensions' => ['jpg', 'png', 'bmp', 'tiff']],

    ]);
    ?>
    <div class="row">
        <div class="col-sm-12">
            <?php
            if ($model->id != "") {
                echo '<div class="col-md-2" style="background-color:#ccc;margin-right:5px"><img width="125" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../uploads/banners/'. $model->id.'/banner-'.$model->id.'.'.$model->image.'" /></div>';
                ?>
                <br>
                <br>
            <?php } ?>
        </div>
    </div>
    <br/>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'button_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort_order')->textInput() ?>

    <?php echo $form->field($model, 'status')->dropDownList([1 => 'Enable', 0 => 'Disable']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
