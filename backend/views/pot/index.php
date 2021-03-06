<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pot';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pot-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pot', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'harga',
            'bahan_baku',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
