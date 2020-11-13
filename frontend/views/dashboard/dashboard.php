 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
height: 63px;
 margin-top: 5px;
    background: #8ab352;
    border: 1px solid #8ab352;
    color: #fff;
    border-radius: 29px;
    padding-top: 20px;
    cursor: pointer;
 }   
.address-view{
height: 63px;
    margin-top: 5px;
    border: 1px solid #8ab352;
    color: black;
    border-radius: 29px;
    
    padding-top: 20px;
    cursor: pointer;
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
                      <h1>Don Bosco</h1>
                      <p class="title">donboscokunnath@gmail.com</p>
                      <p>+91 8129262319</p>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                     
                    </div>






                </div>





    


                <!-- train section -->
                <div class="bhoechie-tab-content">
                  <div class="all-rows">
                   <div class="col-md-3">
                      <div class="address-view active" style="padding-left: 26px;">
                        <input type="checkbox" class="form-check-input" checked="true" id="exampleCheck1">
                          <span style="padding-left: 18px;">
                            Default Address
                          </span>
                        </div>
                      </div>
                    <div class="col-md-3">
                      <div class="address-view"  style="padding-left: 43px;">
                        <input type="checkbox" class="form-check-input"  id="exampleCheck1">
                          <span style="padding-left: 18px;">
                            Address1
                          </span>



                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="address-view"  style="padding-left: 43px;">
                        <input type="checkbox" class="form-check-input"  id="exampleCheck1">
                          <span style="padding-left: 18px;">
                            Address2
                          </span>



                      </div>
                    </div>


                    <div class="col-md-3">
                      <div class="address-view"  style="padding-left: 43px;">
                        <input type="checkbox" class="form-check-input"  id="exampleCheck1">
                          <span style="padding-left: 18px;">
                            Address3
                          </span>



                      </div>
                    </div>
                    </div>
                    
                      <form>
                        <div class="edit-address">
                        <div class="row" style="margin-top:10px">
                          <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First name">
                          </div>
                          <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last name">
                          </div>
                        </div>
                        </div>
                      </form>
                    








                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
      
                  <table>
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
                  </table>




                </div>





                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#82ae46"></h1>
                      <h2 style="margin-top: 0;color:#82ae46">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#82ae46">Restaurant Diirectory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#82ae46"></h1>
                      <h2 style="margin-top: 0;color:#82ae46">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#82ae46">Credit Card</h3>
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