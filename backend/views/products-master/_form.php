<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\file\FileInput;
// use dosamigos\ckeditor\CKEditor;
use common\models\UnitMaster;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsMaster */
/* @var $form yii\widgets\ActiveForm */
?>


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
?>
  <?php  
   // echo $form->field($model, 'unit_mst_id[]')            
   //   ->dropDownList($units,
   //   [
   //    'multiple'=>'multiple',
   //    'class'=>'chosen-select input-md required',              
   //   ]             
   //  )->label("Add Units"); 
  ?>
<div class="form-group field-productsmaster-units required">
<label class="control-label" for="productsmaster-units">Select Units </label>
<br>
<?php
foreach ($units as $key => $value) {
   ?> 
   <label class="checkbox-inline">
    <input class="unit-select" type="checkbox" name="ProductsMaster['unit_mst_id'][]" value="<?=$key?>">
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

<?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>



    <?php echo $form->field($model, 'status')->dropDownList([1 => 'Enabled', 0 => 'Disabled']) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


  <button type="button" style="visibility: hidden;" id="test" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">&times;</button>
          <h4 class="modal-title">Quantity & Price</h4>
        </div>
        <div class="bdy"></div>
        
      </div>
      
    </div>
  </div>
  








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    var html='Price';
    var oldval='';
    var newval="";
   $(document).ready(function(){

        $("#myModal").modal({
        show:false,
        backdrop:'static'
        });



    // alert($('.control-label').attr('for'));
    $('.slug').keyup(function() {
            $('#productsmaster-canonical_name').val(getSlug($(this).val()));
        });
    
$('#productsmaster-unit_mst_id').change(function(e){

 var selectedCountry = $(this).children("option:selected").text();
  alert("You have selected the country - " + selectedCountry);
      // $.each($("#productsmaster-unit_mst_id option:selected"), function(){            
      //       alert($(this).text());
      //   });
    // var selectedCountry = $(this).children("option:selected").text();
    //     alert("You have selected the country - " + selectedCountry);
});

        $(".unit-select").click(function (e) {
            var allhtml='';
            e.stopImmediatePropagation();
            if ($(this).is(":checked")) {
                varSpanId= $(this).val();
                allhtml+='<div class="modal-body">';
                allhtml+='<input type="number" id="quantity-'+varSpanId+'" name="quantity" min="1">';
                allhtml+='<label for="quantity"> '+$('#unitspan-'+varSpanId).html()+' = </label>';
                allhtml+='<input type="number" id="amount-'+varSpanId+'" name="amount">';
                allhtml+='<label for="amount"> AED</label>';  
                allhtml+='<input type="hidden" savestatus="0" id="hidden-'+varSpanId+'" name="hidded" value="'+varSpanId+'">';   
                allhtml+='</div>';
                allhtml+='<div id="alert-note-'+varSpanId+'"></div>';
                allhtml+='<div class="modal-footer">';
                allhtml+='<button type="button" id="'+varSpanId+'" onclick="test('+varSpanId+')"  class="btn btn-default save-value">Save</button>';
                allhtml+='</div>';
            $('.bdy').html(allhtml);
                 $('#test').click();
            } else {
                vId= $(this).val();
                $.ajax({
                 url:baseurl+'/products-master/delete-unit-amount',
                 data:{'id':vId},
                 type:'POST',
                 success:function(data){
                   
                 },
                 error:function(){
                 }
            });
            }
        });

       
   
    });
   function test(id){

   
    var validate=0;
    $('#hidden-'+id).val()
        if($('#quantity-'+id).val()==''||$('#quantity-'+id).val()==0){

          validate=1;  
        }else{var weight=$('#quantity-'+id).val();}
        if($('#amount-'+id).val()==''||$('#amount-'+id).val()==0){
          validate=1;  
        }else{var amount=$('#quantity-'+id).val()}
        if(validate==0){
          
             $.ajax({
                 url:baseurl+'/products-master/save-unit-amount',
                 data:{'unitId':id,'weight':weight,'amount':amount},
                 type:'POST',
                 success:function(data){
                    if(data==1){
                        $('#alert-note-'+id).html('<div class="alert alert-success" role="alert">Value succesfully saved</div>'); 
                        setTimeout(function(){
                           $('#test').click();     
                        },3000);
                    }else{
                         $('#alert-note-'+id).html('<div class="alert alert-danger" role="alert">Sorry something went wrong</div>'); 
                      setTimeout(function(){
                           $('#alert-note-'+id).html('');
                        },3000);   
                    }
                 },
                 error:function(){
                 }
            });
        }else{
             $('#alert-note-'+id).html('<div class="alert alert-danger" role="alert">Sorry unit or amount cannot be empty</div>');
                setInterval(function(){
                             $('#alert-note-'+id).html('');
                        },3000); 
        }
   }
                function getSlug(str) {
                  return str.toLowerCase().replace(/ +/g, '-').replace(/[^-\w]/g, '');
                }
                </script>


             
