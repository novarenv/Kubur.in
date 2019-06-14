<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

if ( Yii::$app->user->isGuest )
    return Yii::$app->getResponse()->redirect('login');

$this->title = 'Planner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <div class="startpage" style="padding-top: 20px;">
    <div class="row">
            <div class="col-1 col-lg-4"></div>
            <div class="col-10 col-lg-4 text-center">
                <h1><?= Html::encode($this->title) ?></h1>

                <p class="mt-5"></p>
                <?php $form = ActiveForm::begin(['action' => ['site/planner'], 'options' => ['method' => 'post']]); ?>

                <?php echo $form->field($model, 'id_metode_pemakaman')->dropdownList([
                        1 => 'Peti (500000)', 
                        2 => 'Kafan (200000)',
                        3 => 'Kremasi (3000000)'
                    ],
                    ['prompt'=>'Select Category']
                ); ?>
                <?php echo $form->field($model, 'id_user')->hiddenInput(['value'=> Yii::$app->user->identity->id])->label(false); ?>
                <?php $model->save()?>
                <div class="form-group">
                    <?= Html::submitButton('Next', ['class' => 'btn btn-dark']) ?>
                </div>
                <?php ActiveForm::end(); ?>
                
               
            </div>
            <div class="col-1 col-lg-4"></div>

        </div>
        
    </div>
</div>

<script>

</script>