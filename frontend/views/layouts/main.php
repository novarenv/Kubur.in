<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <nav class="navbar navbar-expand-lg navbar-light px-4">
        <ul class="navbar-nav ">
            <div class="menu-btn" id="btn-menu" onclick="checkNav(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </ul>
        <a class="navbar-brand mx-auto" href="#">Kubur.in</a>
        <form class="form-inline">
            <button class="btn btn-dark" id="btn-login" type="button" onclick="showLogin(this)">Sign In</button>
        </form>
    </nav>

    <div id="mySidenav" class="sidenav">
        <a href="#" class="sidenav-top">Planner</a>
        <a href="#">Services</a>
        <a href="#">About</a>
    </div>

    <?= $content ?>

    <div class="form shadow-sm" id="login-form">
        <form class="login-form">
            <input type="text" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button class="btn btn-dark">login</button>
            <p class="message"><a href="#">Sign Up</a></p>
        </form>
    </div>

    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>