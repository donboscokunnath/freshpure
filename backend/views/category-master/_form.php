<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true,'class'=>'slug form-control']) ?>
     <?= $form->field($model, 'canonical_name')->hiddenInput(['maxlength' => true])->label(false) ?>
     <?php echo $form->field($model, 'status')->dropDownList([1 => 'Enable', 0 => 'Disable']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("
        $(document).ready(function(){
             
             $('.slug').keyup(function() {
           
                                 $('#categorymaster-canonical_name').val(getSlug($(this).val()));
                        });
       


        });
		        function getSlug(str) {
				  return str.toLowerCase().replace(/ +/g, '-').replace(/[^-\w]/g, '');
				}
        ");
?>