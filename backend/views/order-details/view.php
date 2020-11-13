<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OrderDetails */
$orderid = $model->order_id;
$userId = $model->user_id;
$currentStatus = $model->status;
$this->title = 'Order Details of '.$model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
        <?php if($currentStatus != 4) { ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Change Status
            </button>
        <?php } ?>
    </p> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'order_id',
            [                                                  
                'label' => 'Product',
                'value' => $model->productsDetails->name 
            ],
            'user_id',
            [                                                  
                'label' => 'Date',
                'value' => date('d-m-Y',strtotime($model->date))    
            ],
            'price',
            'quantity',
            [                                                  
                'label' => 'Unit',
                'value' => $model->productsUnitDetails->unit    
            ],
            [                                                  
                'label' => 'Status',
                'value' => $model->getOrderStatus($model->status)      
            ],
        ],
    ]) ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <form action="../order-details/change-status" method="post">
    <input type="hidden" name="orderId" value="<?= $orderid; ?>" />
    <input type="hidden" name="userId" value="<?= $userId; ?>" />
    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change Order Status(Order :<?php echo $orderid;?>)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="status">Choose a New Status:</label>
            <select id="status" name="status">
              <?php if($currentStatus == 1) { ?>
                  <option value="2">Confirmed</option>
                  <option value="3">Shipped</option>
                  <option value="4">Completed</option>
              <?php }elseif($currentStatus == 2) { ?>
                <option value="3">Shipped</option>
                <option value="4">Completed</option>
              <?php }elseif($currentStatus == 3) { ?>
                <option value="4">Completed</option>
              <?php } ?>
            </select>
          </div>
          <div style="margin-left: 15px;">
            <label for="status">Enter your Remarks:</label>
              <textarea rows = "5" cols = "50" name = "remark">
                
             </textarea>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Save changes">
          </div>
        </div>
      </div>
      </form>
    </div>

</div>
