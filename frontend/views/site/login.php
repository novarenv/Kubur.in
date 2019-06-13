<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="startpage" style="padding-top: 20px;">
    <p class="text-center">Log in</p>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'login-form', 'fieldConfig' => [
                        'template' => "{input}",
                        'options' => [
                            'tag'=>'span'
                        ]
                ]]); ?>
            <?= $form->field($model, 'username', ['enableLabel' => false])->textInput(['autofocus' => true, 'placeholder' => 'username', 'class' => 'my-3 form-control']) ?>
            <?= $form->field($model, 'password', ['enableLabel' => false])->passwordInput(['placeholder' => 'password', 'class' => 'my-3 form-control']) ?>
            <?= Html::submitButton('Login', ['class' => 'btn btn-dark float-right my-1', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
            <p class="message"><a href="#">Sign Up</a></p>
        </div>
        <div class="col-lg-4"></div>
    </div>


</div>