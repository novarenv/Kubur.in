<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lokasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lokasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ukuran')->textInput() ?>

    <?= $form->field($model, 'max_kuburan')->textInput() ?>

    <?= $form->field($model, 'now_kuburan')->textInput() ?>

    <?= $form->field($model, 'id_kecamatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
