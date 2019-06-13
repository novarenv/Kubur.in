<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peti */

$this->title = 'Create Peti';
$this->params['breadcrumbs'][] = ['label' => 'Petis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
