<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\file\FileInput;
// use dosamigos\ckeditor\CKEditor;
use common\models\UnitMaster;
use common\models\ProductUnitMaster;
use common\models\ProductImageMapping;
use common\models\ProductAmountUnitMapping;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsMaster */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="products-master-form">

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


    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'slug form-control']) ?>

    <?= $form->field($model, 'canonical_name')->hiddenInput(['maxlength' => true])->label(false)  ?>

    <?php echo $form->field($model, 'category')->dropDownList([1 => 'Fruits', 2 => 'Vegitables']) ?>
 

    <?= $form->field($model, 'min_quantity')->textInput() ?>
    <?php   
    $units1=UnitMaster::find(['status'=>1])->all();
    $units=ArrayHelper::map($units1,'id','unit');

     $selected1=ProductUnitMaster::find(['status'=>1,'product_id'=>$model->id])->all();
    $model->unit_mst_id=ArrayHelper::map($selected1,'id','unit_id');

    $pIds=ProductAmountUnitMapping::find(['product_id'=>$model->id])->all();
    $allIds=ArrayHelper::map($pIds,'id','unit_id');
?>

   <?php
    // $form->field($model, 'unit_mst_id')            
    //  ->dropDownList($units,
    //  [
    //   'multiple'=>'multiple',
    //   'class'=>'chosen-select input-md required',              
    //  ]             
    // )->label("Add Units"); 

?>
<div class="form-group field-productsmaster-units required">
<label class="control-label" for="productsmaster-units">Select Units </label>
<br>
<?php
foreach ($units as $key => $value) {
 
  if(in_array($key, $allIds)){
    $check="checked";
  }else{$check="";}
   ?> 
   <label class="checkbox-inline">
    <input class="unit-select" <?=$check?> type="checkbox" name="ProductsMaster['unit_mst_id'][]" value="<?=$key?>">
    <span id="unitspan-<?=$key?>">
        <?=$value?>
    </span>
    </label>

   <?php 
}
?>

</div>
    <div id="price-div"></div>
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

  <?php echo $form->field($model, 'master_unit')->dropDownList($units)->label("Master Unit") ?>
<?php echo $form->field($model, 'make_top')->dropDownList([1 => 'Yes', 0 => 'No'])->label("Featured") ?>

    <?=
    $form->field($model, 'main_image')->widget(FileInput::classname(), [
     'pluginOptions' => ['previewFileType' => 'any',
         'allowedFileExtensions' => ['jpg', 'png', 'bmp', 'tiff'],
         

     ],

    ]);
    ?>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php
           
            if ($model->main_image != '') {

                echo '<img width="125" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../uploads/products/' . $model->id . '/main-image/'.$model->canonical_name.'-'. $model->id . '.' . $model->main_image . '" />'
                ?>
                <br>
                <br>
            <?php }
            ?>

        </div>
    </div>


      <?=
    $form->field($model, 'subImages[]')->widget(FileInput::classname(), [
        'options' => ['multiple' => true, 'accept' => 'image/*'],
     'pluginOptions' => ['previewFileType' => 'any',
         'allowedFileExtensions' => ['jpg', 'png', 'bmp', 'tiff'],
         

     ],

    ]);
    ?>

    <div class="row">
     
        
            <?php
          $subImages=ProductImageMapping::find(['status'=>1,'product_id'=>$model->id])->all();
          // echo '<pre>';
          // print_r($subImages);exit;
            if (!empty($subImages)) {
                foreach ($subImages as $key => $value) { ?>
                 <div class="col-sm-2"> 
                 <?php  
                 if(count($subImages)>1){
                    $lin='<a href="'.Yii::$app->request->baseUrl . '/products-master/delete2?id='.$value->id.'"><i style="cursor:pointer" class="fa fa-trash" aria-hidden="true"></i><a>';
                 }else{
                    $lin='';
                 }
                echo '<img width="125" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../uploads/products/' . $model->id . '/main-image/sub-images/sub-'. $value->id . '.' . $value->image . '" />'.$lin;
                ?>
                <br>
                <br>
                </div>
            <?php
                }
             }
            ?>

        </div>
    </div>



<?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>



    <?php echo $form->field($model, 'status')->dropDownList([1 => 'Enabled', 0 => 'Disabled']) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



<script type="text/javascript">
    var html='Price';
    var oldval='';
    var newval="";
   $(document).ready(function(){
    $('.slug').keyup(function() {
            $('#productsmaster-canonical_name').val(getSlug($(this).val()));
        });
  
    });
                function getSlug(str) {
                  return str.toLowerCase().replace(/ +/g, '-').replace(/[^-\w]/g, '');
                }
                </script>
