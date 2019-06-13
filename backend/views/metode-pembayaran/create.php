<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MetodePembayaran */

$this->title = 'Create Metode Pembayaran';
$this->params['breadcrumbs'][] = ['label' => 'Metode Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metode-pembayaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
