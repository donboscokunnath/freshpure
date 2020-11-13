<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UnitMaster */

$this->title = 'Create Unit Master';
$this->params['breadcrumbs'][] = ['label' => 'Unit Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
