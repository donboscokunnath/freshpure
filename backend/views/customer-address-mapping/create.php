<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CustomerAddressMapping */

$this->title = 'Create Customer Address Mapping';
$this->params['breadcrumbs'][] = ['label' => 'Customer Address Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-address-mapping-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
