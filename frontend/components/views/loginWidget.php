<?php
use yii\bootstrap\ActiveForm; 
use yii\helpers\Html;
?>


<?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'login-form', 'fieldConfig' => [
                        'template' => "{input}",
                        'options' => [
                            'tag'=>'span'
                        ]]]); ?>
    <?= $form->field($user, 'username', [
          'inputOptions' => [
              'placeholder' => $user->getAttributeLabel('username'),
          ],
        ])->label(false);
    ?>
    <?= $form->field($user, 'password', [
          'inputOptions' => [
              'placeholder' => $user->getAttributeLabel('password'),
          ],
        ])->passwordInput()->label(false);
    ?>
    
        <?= Html::submitButton('Login', ['class' => 'btn btn-dark', 'name' => 'login-button']) ?>
<?php ActiveForm::end(); ?>
<p class="message"><a href="#">Sign Up</a></p>