<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UnitMaster */

$this->title = 'Update Unit Master: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unit-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
