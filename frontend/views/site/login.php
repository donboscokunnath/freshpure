<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerAddressMapping */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
input[type="submit"]{
                      background: #82ae46;
                      border: 1px solid #82ae46;
                      color: #fff;
                      cursor: pointer;
                      border-radius: 29px;
                   
                      padding-left: 25px;
                      padding-right: 25px;
                      padding-top: 10px;
                      padding-bottom: 10px;
                    }
                    .billing-form .form-control::-webkit-input-placeholder {
    
    color: #0e0e0e !important;

}
.help-block {
    font-size: 12px;
    color: #f00;
}
.has-error {
    max-height: 58px;
}
#customeraddressmapping-mobile{
  width: 82%;
}
</style>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Login</span></p>
            <h1 class="mb-0 bread">Login</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
            <?php 
             
            if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        
         <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

                         <?php $form = ActiveForm::begin(
                            [
                                
                                'options' => [
                                    'class' => 'billing-form'
                                 ]
                            ]
                        ); ?>
                       
                            <h3 class="mb-4 billing-heading">Login</h3>
                              <div class="row align-items-end">
                                  <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="firstname">Mobile</label>
                                   <?= $form->field($model, 'mobile')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Mobile'])->label(false) ?>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="lastname">Password</label>
                                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Password'])->label(false) ?>
                                  </div>
                              </div>

                           </div>
                             <div class="row">
                               <div class="col-md-6">
                                 <input type="submit" id="login-btn" name="submit" value="Login">
                               
                               </div>
                                <div class="col-md-6">
                                 <p style="float: right;color:"black">
                                  <a href="<?= Yii::$app->request->baseUrl; ?>/register"> New customer? Start here.</a>
                                </p>
                                </div>
                            </div>
                           <?php ActiveForm::end(); ?>

        </div>
                   
        </div>
      </div>
    </section> 
    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
            <span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php $this->registerJs("
    $(document).ready(function() {
        $('.close').on('click', function() {
         $('.alert-dismissable').hide();
        });



    });
")
?>