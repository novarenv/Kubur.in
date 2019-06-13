<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

if ( Yii::$app->user->isGuest )
    return Yii::$app->getResponse()->redirect('login');

$this->title = 'Planner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    
    <div class="startpage">
    <h1><?= Html::encode($this->title) ?></h1>

<p>This is the About page. You may modify the following file to customize its content:</p>

<code><?= __FILE__ ?></code>


    </div>
    
</div>
