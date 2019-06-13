<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.js'></script>
    
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-black sidebar-mini">
<?php $this->beginBody() ?>
<?php
if (!Yii::$app->user->isGuest) {
?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/Kubur.in/backend/web" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kubur</b>.in</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="height: 80px;">
                <p class="">
                  <?= Yii::$app->user->identity->username; ?>
                  <small>Pussy Slayer</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <?php echo Html::beginForm(['/site/logout'], 'post')
                      . Html::submitButton(
                          'Logout',
                          ['class' => 'btn btn-default btn-flat']
                      )
                      . Html::endForm()
                  ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        echo yii\widgets\Menu::widget([
            'items' => [
                ['label' => '<i class="fa fa-home"></i> <span>Home</span>', 'url' => ['site/index']],
                ['label' => '<i class="fa fa-list-alt"></i> <span>Pemesanan</span>', 'url' => ['pemesanan/index']],
                ['label' => '<i class="fa fa-users"></i> <span>User</span>', 'url' => ['user/index']],
                ['label' => '<i class="fa fa-map-marker"></i> <span>Lokasi</span>', 'url' => ['lokasi/index']],
                ['label' => '<hr style="margin:0; border-color:#888;">'],
                ['label' => '<i class="fa fa-cross"></i> <span>Batu Nisan</span>', 'url' => ['batu-nisan/index']],
                ['label' => '<i class="fa fa-plus-square"></i> <span>Item Tambahan</span>', 'url' => ['item-tambahan/index']],
                ['label' => '<i class="fa fa-globe-asia"></i> <span>Kecamatan</span>', 'url' => ['kecamatan/index']],
                ['label' => '<i class="fa fa-procedures"></i> <span>Metode Pemakaman</span>', 'url' => ['metode-pemakaman/index']],
                ['label' => '<i class="fa fa-money-bill-wave"></i> <span>Metode Pembayaran</span>', 'url' => ['metode-pembayaran/index']],
                ['label' => '<i class="fa fa-suitcase"></i> <span>Peti</span>', 'url' => ['peti/index']],
                ['label' => '<i class="fa fa-fill"></i> <span>Pot</span>', 'url' => ['pot/index']],
                ['label' => '<i class="fa fa-question-circle"></i> <span>Status Pemesanan</span>', 'url' => ['status-pemesanan/index']],
                
                  
            ],
            'activeCssClass'=>'active',
            'options' => [
              'class' => 'sidebar-menu',
              'id'=>'navbar-id',
            ],
            
            'encodeLabels' => false,
        ]);
        
        ?>
        
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <?= $content ?>
  </div>

</div>

<?php } else {
    ?>
    <?= $content ?>
    <?php
}
?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
