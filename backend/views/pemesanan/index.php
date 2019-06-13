<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PemesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemesanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'nama',
            'nik',
            'id_pot',
            'harga',
            //'id_peti',
            //'id_status_pemesanan',
            //'id_batu_nisan',
            //'id_lokasi',
            //'id_metode_pemakaman',
            //'id_item_tbh',
            //'id_metode_bayar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
<script>
  var title = "menuPemesanan";
</script>