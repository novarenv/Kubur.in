<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'id_pot')->textInput() ?>

    <?= $form->field($model, 'id_peti')->textInput() ?>

    <?= $form->field($model, 'id_status_pemesanan')->textInput() ?>

    <?= $form->field($model, 'id_batu_nisan')->textInput() ?>

    <?= $form->field($model, 'id_lokasi')->textInput() ?>

    <?= $form->field($model, 'id_metode_pemakaman')->textInput() ?>

    <?= $form->field($model, 'id_item_tbh')->textInput() ?>

    <?= $form->field($model, 'id_metode_bayar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
