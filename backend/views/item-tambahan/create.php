<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemTambahan */

$this->title = 'Create Item Tambahan';
$this->params['breadcrumbs'][] = ['label' => 'Item Tambahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-tambahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
