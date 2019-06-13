<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'bower_components/morris.js/morris.css',
        'bower_components/jvectormap/jquery-jvectormap.css',
        'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/site.css',
        'https://api.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.css'
    ];
    public $js = [
        "bower_components/jquery/dist/jquery.min.js",
        "bower_components/jquery-ui/jquery-ui.min.js",
        "bower_components/bootstrap/dist/js/bootstrap.min.js",
        "bower_components/raphael/raphael.min.js",
        "bower_components/morris.js/morris.min.js",
        "bower_components/jquery-sparkline/dist/jquery.sparkline.min.js",
        "bower_components/jquery-knob/dist/jquery.knob.min.js",
        "bower_components/moment/min/moment.min.js",
        "bower_components/bootstrap-daterangepicker/daterangepicker.js",
        "bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
        "plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
        "bower_components/jquery-slimscroll/jquery.slimscroll.min.js",
        "bower_components/fastclick/lib/fastclick.js",
        "dist/js/adminlte.min.js",
        "https://kit.fontawesome.com/070a3e4a04.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
