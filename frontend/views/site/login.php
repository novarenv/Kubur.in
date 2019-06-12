<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'login-form', 'fieldConfig' => [
                        'template' => "{input}",
                        'options' => [
                            'tag'=>'span'
                        ]
    ]]); ?>
        <?= $form->field($model, 'username', ['enableLabel' => false])->textInput(['autofocus' => true, 'placeholder' => 'username']) ?>
        <?= $form->field($model, 'password', ['enableLabel' => false])->passwordInput(['placeholder' => 'password']) ?>
        <?= Html::submitButton('Login', ['class' => 'btn btn-dark', 'name' => 'login-button']) ?>
        <?php ActiveForm::end(); ?>
            <p class="message"><a href="#">Sign Up</a></p>
