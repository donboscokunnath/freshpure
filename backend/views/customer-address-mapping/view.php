<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerAddressMapping */

$this->title = 'Customer Details';
$this->params['breadcrumbs'][] = ['label' => 'Customer Details', 'url' => ['index']];

?>
<div class="customer-address-mapping-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'customer_id',
            'first_name',
            'last_name',
            'llandmark',
            'area',
            'address',
            'province',
            'country',
            
            // 'address2',
            'type',
        ],
    ]) ?>

</div>
