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
        'css/site.css',
        'css/owl.carousel.css',
        'css/style.css',
        'css/responsive.css',
        'css/commentStyle.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
        'js/jquery.sticky.js',
        'js/jquery.easing.1.3.min.js',
        'js/main.js',
        'js/bxslider.min.js',
        'js/script.slider.js',
        'js/commentBlog.js',
        'js/reviewProduct.js',
        'js/jquery.raty.js',
        'js/pusher.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
