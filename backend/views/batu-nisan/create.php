<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BatuNisan */

$this->title = 'Create Batu Nisan';
$this->params['breadcrumbs'][] = ['label' => 'Batu Nisans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batu-nisan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
