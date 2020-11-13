<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProductsMaster */

$this->title = 'Add Products';
$this->params['breadcrumbs'][] = ['label' => 'Add Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
