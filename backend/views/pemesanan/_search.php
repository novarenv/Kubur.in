<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'id_pot') ?>

    <?php // echo $form->field($model, 'id_peti') ?>

    <?php // echo $form->field($model, 'id_status_pemesanan') ?>

    <?php // echo $form->field($model, 'id_batu_nisan') ?>

    <?php // echo $form->field($model, 'id_lokasi') ?>

    <?php // echo $form->field($model, 'id_metode_pemakaman') ?>

    <?php // echo $form->field($model, 'id_item_tbh') ?>

    <?php // echo $form->field($model, 'id_metode_bayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
