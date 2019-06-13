<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="startpage" style="padding-top: 20px;">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h5><?= Html::encode($this->title) ?></h5>
                <h1><?= Yii::$app->user->identity->username; ?></h1>

                <p><?= Yii::$app->user->identity->email; ?></p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => '{items}{pager}',
                    'columns' => [

                        'nama',
                        'nik',
                        //'id_pot',
                        //'id_peti',
                        'id_status_pemesanan',
                        //'id_batu_nisan',
                        //'id_lokasi',
                        'id_metode_pemakaman',
                        //'id_item_tbh',
                        'id_metode_bayar',

                    ],
                ]); ?>

            </div>
            <div class="col-lg-1"></div>

        </div>
    </div>
</div>