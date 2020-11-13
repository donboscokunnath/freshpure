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
    font-size: 10px;
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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Register</span></p>
            <h1 class="mb-0 bread">Register</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">

            <?php $form = ActiveForm::begin(
                [
                    
                    'options' => [
                        'class' => 'billing-form'
                     ]
                ]
            ); ?>
      
           
            <!-- <form action="#" class="billing-form"> -->
              <h3 class="mb-4 billing-heading">Register</h3>
              <div class="row align-items-end">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstname">Firt Name</label>
                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'First Name'])->label(false) ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Last Name'])->label(false) ?>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone" style="margin-left: -47px;">Phone</label>
                    <span style="
                      height: 58px;
                      float: left;
                      padding-top: 17px;
                      padding-right: 10px;
                      padding-left: 10px;
                      background-color: #eeedf0;
                      margin-top: 35px;
                  ">+971</span>


                    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Phone '])->label(false) ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="emailaddress">Password</label>
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Password'])->label(false) ?>
                  </div>
                </div>


               
                <div class="w-100"></div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="emailaddress">Email Address</label>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Email Address'])->label(false) ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="country">Landmark</label>
                     <?= $form->field($model, 'llandmark')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Landmark'])->label(false) ?>
                  </div>
                </div>
                
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="streetaddress">Area</label>
                   <?= $form->field($model, 'area')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Area'])->label(false) ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="streetaddress">Address</label>
                    <?= $form->field($model, 'address')->textarea(['rows' => '4','placeholder'=>'Address'])->label(false) ?>
                     
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="towncity">Province</label>
                     <?= $form->field($model, 'province')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Province'])->label(false) ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="postcodezip">Country</label>
                    <?= $form->field($model, 'country')->textInput(['maxlength' => true,'class'=>'form-control','placeholder'=>'Country'])->label(false) ?>
                  </div>
                </div>
                
                <div class="w-100"></div>
               
                <div class="w-100"></div>
               <div class="col-md-12">
                  <div class="form-group mt-4">
                    <input type="submit" name="submit" value="Register">
                  </div>
                </div>
                 


              </div>
              <?php ActiveForm::end(); ?>
          </div>



        </div>
      </div>
    </section> <!-- .section -->

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