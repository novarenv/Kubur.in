<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <section class="content-header">
    <h1><?= Html::encode($this->title) ?></h1>

</section> -->

<section class="content">
    <div class="site-login">
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Kubur</b>.in</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body" style="padding-top: 20px;">

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="form-group has-feedback">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="form-group has-feedback">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                        <!-- /.col -->
                    </div>
                    <?php ActiveForm::end(); ?>
                </form>
                
                <!-- /.social-auth-links -->


            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
        <!-- <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div> -->
    </div>
</section>