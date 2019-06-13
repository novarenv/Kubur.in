<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\BatuNisan;
use app\models\ItemTambahan;
use app\models\Kecamatan;
use app\models\Lokasi;
use app\models\MetodePembayaran;
use app\models\MetodePemakaman;
use app\models\Peti;
use app\models\Pot;

if ( Yii::$app->user->isGuest )
    return Yii::$app->getResponse()->redirect('login');
if ( $model['id_user'] != Yii::$app->user->identity->id)
    return Yii::$app->getResponse()->redirect('index');

$pot['bahan_baku'] = '-';
$peti['bahan_baku'] = '-';
$harga = 0;
$batu = BatuNisan::findOne($model['id_batu_nisan']);
$harga += $batu['harga'];
$lokasi = Lokasi::findOne($model['id_lokasi']);
$metode = MetodePemakaman::findOne($model['id_metode_pemakaman']);


if($model['id_peti']){
    $peti = Peti::findOne($model['id_peti']);
    $harga += $peti['harga'];
}
if($model['id_pot']){
    $pot = Pot::findOne($model['id_pot']);
    $harga += $pot['harga'];
}
$bayar = MetodePembayaran::findOne($model['id_metode_bayar']);

$this->title = 'Planner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

    <div class="startpage" style="padding-top: 20px;">
    <div class="row">
            <div class="col-1 col-lg-4"></div>
            <div class="col-10 col-lg-4 text-center">
                <h1><?= Html::encode($this->title) ?></h1>

                <p class="mt-5">Nama : <?= $model->nama ?> <br>
                NIK : <?= $model->nik ?> <br>
                Metode : <?= $metode['nama'] ?> <br>

            
            


                <?php if($model['id_metode_pemakaman'] == 1) { $harga += 500000;?>
                    Lokasi : <?= $lokasi['nama'] ?> <br>
                    Peti : <?= $peti['bahan_baku'] ?>, <?= $peti['harga'] ?> <br>
                    Batu Nisan : <?= $batu['nama'] ?>, <?= $batu['harga'] ?> <br>
                    

                
                <?php } else if($model['id_metode_pemakaman'] == 2) { $harga += 200000;?>
                    Lokasi : <?= $lokasi['nama'] ?> <br>
                    Batu Nisan : <?= $batu['nama'] ?>, <?= $batu['harga'] ?> <br>
                
                <?php } else { $harga += 4000000;?>
                    Pot : <?= $pot['bahan_baku'] ?>, <?= $pot['harga'] ?> <br>
                <?php } ?>
                    
                </p>
                <p>Total Harga : <?=$harga ?> <br>
                Metode Transfer : <?=$bayar['nama'] ?> <br>
                <?php
                    if($bayar['id'] == 1)
                        echo 'Transfer ke nomor : 08123456789';
                    if($bayar['id'] == 2)
                        echo 'Transfer ke nomor : 30102931283907';
                    if($bayar['id'] == 3)
                        echo 'Transfer ke akun : whatzittooya';
                    if($bayar['id'] == 4)
                        echo 'Transfer ke rekening BRI : 30001293019238 a/n Sir John Kotelawala';
                    if($bayar['id'] == 5)
                        echo 'Datang ke kantor kami di Jl. Pegangsaan Timur 48';
                ?>
                </p>
                <a href="index"><button class="btn btn-dark">Kembali Ke Beranda</button></a>

                
            </div>
            <div class="col-1 col-lg-4"></div>

        </div>
        
    </div>
</div>

<script>


</script>