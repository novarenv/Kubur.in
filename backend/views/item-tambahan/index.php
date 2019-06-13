<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemTambahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Tambahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-tambahan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item Tambahan', ['create'], ['class' => 'btn btn-success']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
