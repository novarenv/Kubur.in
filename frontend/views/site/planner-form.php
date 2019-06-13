<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\BatuNisan;
use app\models\ItemTambahan;
use app\models\Kecamatan;
use app\models\Lokasi;
use app\models\MetodePembayaran;
use app\models\Peti;
use app\models\Pot;

if ( Yii::$app->user->isGuest )
    return Yii::$app->getResponse()->redirect('login');

if ( $data[0]['id_user'] != Yii::$app->user->identity->id)
    return Yii::$app->getResponse()->redirect('index');

$this->title = 'Planner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <div class="startpage" style="padding-top: 20px;">
        <div class="row">
            <div class="col-1 col-lg-4"></div>
            <div class="col-10 col-lg-4 text-center">
                <h1><?= Html::encode($this->title) ?></h1>
                <h5><?= $data2[0]['nama']; ?></h5>

                <p class="mt-5"></p>
                <?php $form = ActiveForm::begin([
                    'action' => \yii\helpers\Url::to(['site/saveplanner', 'id' => $id])
                    , 'options' => ['method' => 'post']]); ?>
                <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                <?php if($data[0]['id_metode_pemakaman'] == 1) { ?>
                
                <?php 
                $array = ArrayHelper::map(Lokasi::find()->all(),'id', 'nama');
                echo $form->field($model, 'id_lokasi')->dropdownList(
                        $array, 
                        ['prompt'=>'Tempat Pemakaman']
                    
                ); ?>

                <?php echo $form->field($model, 'id_peti')->dropdownList(
                        ArrayHelper::map(Peti::find()->all(), 'id', 'bahan_baku', 'harga'),
                        ['prompt'=>'Peti']
                ); ?>

                <?php echo $form->field($model, 'id_batu_nisan')->dropdownList(
                        ArrayHelper::map(BatuNisan::find()->all(),'id', 'nama', 'harga'),
                    ['prompt'=>'Batu Nisan']
                ); ?>

                
                <?php } else if($data[0]['id_metode_pemakaman'] == 2) { ?>
                <?php 
                $array = ArrayHelper::map(Lokasi::find()->all(),'id', 'nama');
                echo $form->field($model, 'id_lokasi')->dropdownList(
                        $array, 
                        ['prompt'=>'Tempat Pemakaman']
                    
                ); ?>
                <?php echo $form->field($model, 'id_batu_nisan')->dropdownList(
                        ArrayHelper::map(BatuNisan::find()->all(),'id', 'nama', 'harga'),
                    ['prompt'=>'Batu Nisan']
                ); ?>


                <?php } else { ?>

                    <?php echo $form->field($model, 'id_pot')->dropdownList(
                        ArrayHelper::map(Pot::find()->all(),'id', 'bahan_baku', 'harga'),
                    ['prompt'=>'Pot']
                ); ?>
                
                <?php } ?>

                <?php echo $form->field($model, 'id_metode_bayar')->dropdownList(
                        ArrayHelper::map(MetodePembayaran::find()->all(), 'id', 'nama'),
                        ['prompt'=>'Metode Pembayaran']
                ); ?>

                <?php echo $form->field($model, 'harga')->dropdownList(
                        ArrayHelper::map(Pemesanan::find()->all(), 'id', 'harga'),
                        ['prompt'=>'Harga']
                ); ?>
                
                <?php echo $form->field($model, 'id_status_pemesanan')->hiddenInput(['value'=> 1])->label(false); ?>
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