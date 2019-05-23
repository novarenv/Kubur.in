<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bootstrap4' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'css/temaku.css',
        'css/fonts.css'
    ];
    public $js = [
        'jquery.js' => 'https://code.jquery.com/jquery-3.3.1.slim.min.js',
        'popper.js' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        'bootstrap.min.js' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        'js/index.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    
}
