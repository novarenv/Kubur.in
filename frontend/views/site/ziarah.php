<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

if ( Yii::$app->user->isGuest )
    return Yii::$app->getResponse()->redirect('login');

$this->title = 'Ziarah';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about text-center">
    <div class="startpage">
        <br><br>
        <h1>Keperluan <?= Html::encode($this->title) ?></h1>
        <a class="paragraf">Temukan kebutuhan ziarahmu untuk orang yang kamu sayangi</a><br>
    </div>
</div>
