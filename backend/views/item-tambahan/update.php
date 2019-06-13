<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemTambahan */

$this->title = 'Update Item Tambahan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Item Tambahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-tambahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
