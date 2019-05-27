<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lokasi */

$this->title = 'Create Lokasi';
$this->params['breadcrumbs'][] = ['label' => 'Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
