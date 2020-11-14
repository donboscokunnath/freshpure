 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
/*  bhoechie tab */
div.bhoechie-tab-container{
 
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #86b14c;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #86b14c;
  background-image: #86b14c;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #86b14c;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus {
   
    background-color: #86b14c;
    border-color: #86b14c;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.modal-backdrop{
  display:none;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
} 

.address-view.active{
  min-height: 250px;
  max-height: 300px;
  margin-top: 5px;
  background: #8ab352;
  border: 1px solid #8ab352;
  color: #fff;
  padding-top: 10px;
  cursor: pointer;
 }   
.address-view{
  min-height: 250px;
  max-height: 300px;
  margin-top: 5px;
  border: 1px solid #8ab352;
  color: #8ab352;
  padding-top: 10px;
  cursor: pointer;
 }   

.orderHistory{
  margin-top: 5px;
  background: #8ab352;
  border: 1px solid #8ab352;
  color: #fff;
  padding-top: 10px;
  cursor: pointer;
  height: 75px;
  border-radius: 10px;
}


table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}


 </style>

 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>My Profile</span></p>
            <h1 class="mb-0 bread">>My Profile</h1>
          </div>
        </div>
      </div>
    </div>

    



    <div class="container">
  <div class="row">
        <div class="col-md-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-user"></h4><br/>My Profile
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>My Address
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Order History
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-shopping-cart"></h4><br/>My Cart
                </a>
                <a href="<?=Yii::$app->request->baseUrl.'/logout'?>" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-log-out"></h4><br/>Logout
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    

                    <div class="card">

                      <img src="<?= Yii::$app->request->baseUrl; ?>/images/img_avatar1.png" alt="John" style="width:100%">
                      <h1><?php echo $customerDetails[0]['Name']?></h1>
                      <p class="title"><?php echo $customerDetails[0]['email']?></p>
                      <p>+971 <?php echo $customerDetails[0]['mobile']?></p>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                     
                    </div>






                </div>





    


                <!-- train section -->
                <div class="bhoechie-tab-content">
                  <div class="all-rows">
                    <div class="col-md-12">
                      <div class="col-md-3" style="float:right">
                        <button class="btn btn-success btn-rounded" id="addbtn" data-toggle="modal" data-target="#myModal" style="background-color: #8ab352 !important;margin-bottom: 15px;"><i class="glyphicon glyphicon-plus"></i> New Address</button>
                      </div>
                    </div>
                  </div>
                  <div class="all-rows">
                    <div class="col-md-4">
                      <div class="address-view <?php echo ($customerDetails[0]['used_flag'] == 1) ? 'active' : ''?>" style="padding-left: 26px;">
                        <input type="radio" class="form-check-input checkedInput" <?php if($customerDetails[0]['used_flag'] == 1){ ?> checked="checked" <?php } ?> value="<?php echo $customerDetails[0]['id']?>" name="seladdress" id="exampleCheck1">
                        <span style="padding-left: 18px;">
                          Default Address<hr/>
                          <p style="padding-right: 5px"><?php echo $customerDetails[0]['custAddress']?></p>
                        </span>
                      </div>
                      <span style="float:right;margin-right: 20px;bottom: 10px">
                          <!-- <a class="deleteAddress" style="width: 10px;color: #f00;margin-right: 10px;border:none !important;font-size: 13px;" data-toggle="modal" data-target="#myModal2" data-id="<?php //echo $customerDetails[0]['id']?>"><i class="glyphicon glyphicon-trash"></i></a> -->
                          <a class="editAddress" style="width: 10px;color:#8ab352;border:none !important;font-size: 13px;" data-toggle="modal" data-target="#myModal1" data-id="<?php echo $customerDetails[0]['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>
                    </div>
                    <?php foreach ($customerOtherAddress as $key => $value) {?>
                    <div class="col-md-4">
                      <div class="address-view <?php echo ($value['used_flag'] == 1) ? 'active' : ''?>" style="padding-left: 26px;">
                        <input type="radio" class="form-check-input checkedInput" name="seladdress" <?php if($value['used_flag'] == 1){ ?> checked="checked" <?php } ?> value="<?php echo $value['id']?>" id="exampleCheck1">
                        <span style="padding-left: 18px;">
                          Address<?=$key+1?><hr/>
                          <p style="padding-right: 5px"><?php echo $value['custAddress']?></p>
                        </span>
                      </div>
                      <span style="float:right;margin-right: 20px;bottom: 10px">
                          <a class="deleteAddress" style="width: 10px;color: #f00;margin-right: 10px;border:none !important;font-size: 13px;" data-toggle="modal" data-target="#myModal2" data-id="<?php echo $value['id']?>"><i class="glyphicon glyphicon-trash"></i></a>
                          <a class="editAddress" style="width: 10px;color:#8ab352;border:none !important;font-size: 13px;" data-toggle="modal" data-target="#myModal1" data-id="<?php echo $value['id']?>"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>
                    </div>
                  <?php } ?>
                    </div>
                </div>


                <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add New Address</h4>
                        </div>
                        <div class="modal-body">
                          <div id="errMsg"></div>
                          <div class="col-md-12">
                            <label for="newAddress">Address</label>
                            <textArea class="form-control" name="address" id=newAddress></textArea>
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Landmark</label>
                            <input class="form-control" style="height: 30px !important" type="text" name="landmark" id="landmark">
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Area</label>
                            <input class="form-control" style="height: 30px !important" type="text" name="area" id="area">
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Province</label>
                            <input class="form-control"  style="height: 30px !important" type="text" name="province" id="province">
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Country</label>
                            <input class="form-control"  style="height: 30px !important" type="text" name="country" id="country">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">Close</button>

                          <button type="button" class="btn btn-success" onclick="setAddress()"> Add</button>
                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- Modal -->
                  <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Address</h4>
                        </div>
                        <div class="modal-body">
                          <div id="errMsgEdit"></div>
                          <div class="col-md-12">
                            <label for="newAddress">Address</label>
                            <textArea class="form-control" name="address" id="editAddress"></textArea>
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Landmark</label>
                            <input class="form-control" style="height: 30px !important" type="text" name="landmark" id="editLandmark">
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Area</label>
                            <input class="form-control" style="height: 30px !important" type="text" name="area" id="editArea">
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Province</label>
                            <input class="form-control"  style="height: 30px !important" type="text" name="province" id="editProvince">
                          </div>
                          <div class="col-md-12">
                            <label for="landmark">Country</label>
                            <input class="form-control"  style="height: 30px !important" type="text" name="country" id="editCountry">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <input type="hidden" id='editId' value="">
                          <button type="button" id="closeBtnEdit" class="btn btn-default" data-dismiss="modal">Close</button>

                          <button type="button" class="btn btn-success" onclick="editAddress()"> Update</button>
                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- Delete confirm Modal -->
                  <div id="myModal2" class="modal fade" role="dialog" style="margin-top: 15%;">
                    <div class="modal-dialog" >

                      <!-- Modal content-->
                      <div class="modal-content" style="padding: 20px 0px 20px 0px">
                        <div class="modal-header">
                          <h4 class="modal-title">Do you want to delete this address ?</h4>
                          <br/>
                          <input type="hidden" id='deleteId' value="">
                          <button type="button" style="width:50px; float:right; margin-right:5px;"  id="closeBtnDelete" class="btn btn-default btn-sm" data-dismiss="modal">No</button>

                          <button type="button" style="width:50px;float:right; margin-right:5px;" class="btn btn-danger btn-sm" onclick="deleteAddress()"> Yes</button>
                        </div>
                        <div class="col-md-12 text-center" id="delMsg" style="display: none"><p style="color: #8ab352"> Address deleted from the list</p></div>
                      </div>
                    </div>
                  </div>

    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
      
                  <!-- <table>
                    <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Job Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>James</td>
                      <td>Matman</td>
                      <td>Chief Sandwich Eater</td>
                    </tr>
                    <tr>
                      <td>The</td>
                      <td>Tick</td>
                      <td>Crimefighter Sorta</td>
                    </tr>
                    </tbody>
                  </table> -->
                  <div class="col-md-12" style="height: 450px;overflow-y: scroll;">
                    <?php for($i=0; $i < 10 ;$i++){?>
                    <div class="all-rows">
                      <div class="col-md-12">
                        <div class="orderHistory" style="padding-left: 26px;">
                            <div class="col-md-4"><span>Order No: 123456</span></div>
                            <div class="col-md-4"><span>Payment Mode: Cash on Delivery</span></div>
                            <div class="col-md-4"><span>Paid Amount: 123 AED</span></div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>



                </div>





                <div class="bhoechie-tab-content">
                    <div class="col-md-12" style="height: 450px;overflow-y: scroll;">
                    <?php for($i=0; $i < 10 ;$i++){?>
                    <div class="all-rows">
                      <div class="col-md-12">
                        <div class="orderHistory" style="padding-left: 26px;">
                            <div class="col-md-4"><span>Order No: 123456</span></div>
                            <div class="col-md-4"><span>Payment Mode: Cash on Delivery</span></div>
                            <div class="col-md-4"><span>Paid Amount: 123 AED</span></div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="bhoechie-tab-content">
                    <center style="margin-top:20%">
                      <h4 class="glyphicon glyphicon-log-out"></h4><br/>Logout
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
<br>
<br>
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

    $('div.bhoechie-tab-menu>div.list-group>a').click(function(e) {
      console.log($(this).val)
        e.preventDefault();
        $(this).siblings('a.active').removeClass('active');
        $(this).addClass('active');
        var index = $(this).index();
        $('div.bhoechie-tab>div.bhoechie-tab-content').removeClass('active');
        $('div.bhoechie-tab>div.bhoechie-tab-content').eq(index).addClass('active');
    });
    });
")
?>
<script>
  var baseurl = '<?php print \yii\helpers\Url::base() . "/"; ?>';
  $("#addbtn").click(function(){
    $("#errMsg").html("");
    $("#newAddress").css("border","1px solid #ccc");
    $("#landmark").css("border","1px solid #ccc");
    $("#area").css("border","1px solid #ccc");
    $("#province").css("border","1px solid #ccc");
    $("#country").css("border","1px solid #ccc");
    $("#newAddress").val("");
    $("#landmark").val("");
    $("#area").val("");
    $("#province").val("");
    $("#country").val("");
  });
  $(".checkedInput").click(function(){
    var chk = $(this).val();
    $(".address-view").removeClass("active");
    $(this).parent("div").addClass("active");
    $.ajax({
        url: baseurl+'dashboard/save-address-default',
        type: 'POST',
        data: {addressId:chk},
        success: function (result) {
          
        }
    });
  });

  $(".editAddress").click(function(){
      var chk =$(this).data('id');
      $.ajax({
        url: baseurl+'dashboard/get-address-details',
        type: 'POST',
        data: {addressId:chk},
        dataType: 'json',
        success: function (result) {
          $('#editAddress').val(result.address);
          $('#editLandmark').val(result.llandmark);
          $('#editArea').val(result.area);
          $('#editProvince').val(result.province);
          $('#editCountry').val(result.country);
          $('#editId').val(chk);
        }
    });
  });

  $(".deleteAddress").click(function(){
      var chk =$(this).data('id');
      $('#deleteId').val(chk);
  });

  function deleteAddress(){
    var id = $("#deleteId").val();
    $.ajax({
        url: baseurl+'dashboard/delete-address',
        type: 'POST',
        data: {addressId:id},
        dataType: 'json',
        success: function (result) {
          $("#delMsg").show();
          setTimeout(function(){
            $("#closeBtnDelete").click();
            window.location.href="";
          },500);
        }
    });
  }

  function setAddress(){
    var address = ($("#newAddress").val()) ? $("#newAddress").val() : "";
    var landmark = ($("#landmark").val()) ? $("#landmark").val() : "";
    var area = ($("#area").val()) ? $("#area").val() : "";
    var province = ($("#province").val()) ? $("#province").val() : "";
    var country = ($("#country").val()) ? $("#country").val() : "";
    var flag = 0;
    if(address!=""){
      $("#newAddress").css("border","1px solid #ccc");
    }else{
      $("#newAddress").css("border","1px solid #f00");
      flag = 1;
    }
    if(landmark!=""){
      $("#landmark").css("border","1px solid #ccc");
    }else{
      $("#landmark").css("border","1px solid #f00");
      flag = 1;
    }
    if(area!=""){
      $("#area").css("border","1px solid #ccc");
    }else{
      $("#area").css("border","1px solid #f00");
      flag = 1;
    }
    if(province!=""){
      $("#province").css("border","1px solid #ccc");
    }else{
      $("#province").css("border","1px solid #f00");
      flag = 1;
    }
    if(country!=""){
      $("#country").css("border","1px solid #ccc");
    }else{
      $("#country").css("border","1px solid #f00");
      flag = 1;
    }
    if(flag != 0){
      $("#errMsg").html("<p style='color:#f00'>Please fill the required fields</p>");
    }else{
      $.ajax({
          url: baseurl+'dashboard/save-address',
          type: 'POST',
          data: {address: address,landmark: landmark,area: area,province: province,country:country},
          success: function (result) {
            if(result > 3){
              $("#errMsg").html("<p style='color:#f00'>Already you have added three address</p>");
              setTimeout(function(){
                $("#closeBtn").click();
              },2000);
            }else{
              $("#errMsg").html("<p style='color:#8ab352'>Added new address successfully</p>");
              setTimeout(function(){
                $("#closeBtn").click();
                window.location.href="";
              },2000);
            }
          }
      });
    }

  }

  function editAddress(){
    var address = ($("#editAddress").val()) ? $("#editAddress").val() : "";
    var landmark = ($("#editLandmark").val()) ? $("#editLandmark").val() : "";
    var area = ($("#editArea").val()) ? $("#editArea").val() : "";
    var province = ($("#editProvince").val()) ? $("#editProvince").val() : "";
    var country = ($("#editCountry").val()) ? $("#editCountry").val() : "";
    var id = ($("#editId").val()) ? $("#editId").val() : "";
    var flag = 0;
    if(address!=""){
      $("#editAddress").css("border","1px solid #ccc");
    }else{
      $("#editAddress").css("border","1px solid #f00");
      flag = 1;
    }
    if(landmark!=""){
      $("#editLandmark").css("border","1px solid #ccc");
    }else{
      $("#editLandmark").css("border","1px solid #f00");
      flag = 1;
    }
    if(area!=""){
      $("#editArea").css("border","1px solid #ccc");
    }else{
      $("#editArea").css("border","1px solid #f00");
      flag = 1;
    }
    if(province!=""){
      $("#editProvince").css("border","1px solid #ccc");
    }else{
      $("#editProvince").css("border","1px solid #f00");
      flag = 1;
    }
    if(country!=""){
      $("#editCountry").css("border","1px solid #ccc");
    }else{
      $("#editCountry").css("border","1px solid #f00");
      flag = 1;
    }
    if(flag != 0){
      $("#errMsgEdit").html("<p style='color:#f00'>Please fill the required fields</p>");
    }else{
      $.ajax({
          url: baseurl+'dashboard/edit-address',
          type: 'POST',
          data: {address: address,landmark: landmark,area: area,province: province,country:country,id:id},
          success: function (result) {
            $("#errMsgEdit").html("<p style='color:#8ab352'>Address updated successfully</p>");
            setTimeout(function(){
              $("#closeBtnEdit").click();
              window.location.href="";
            },2000);
          }
      });
    }

  }
</script>