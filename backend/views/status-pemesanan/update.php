<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPemesanan */

$this->title = 'Update Status Pemesanan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Status Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
