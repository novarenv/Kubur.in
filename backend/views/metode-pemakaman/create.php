<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MetodePemakaman */

$this->title = 'Create Metode Pemakaman';
$this->params['breadcrumbs'][] = ['label' => 'Metode Pemakamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metode-pemakaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
