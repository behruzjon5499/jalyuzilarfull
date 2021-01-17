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
//        '/css/css/style.css',
//        '/css/owl.carousel.min.css',
        '/css/base.css',
//        '/css/bootstrap-dropdownhover.min.css',
//        '/css/cubeportfol io.min.css',
//        '/css/icofont.min.css',
//        '/css/shortcodes.css',
//        '/css/animate.min.css',
        '/style.css',
//        '/css/responsive.css',
        '/rev-slider/revolution/css/layers.css',
        '/rev-slider/revolution/css/navigation.css',
        '/rev-slider/revolution/css/settings.css',
    ];
    public $js = [

        '/js/popper.min.js',
        '/js/bootstrap.min.js',
        '/js/bootstrap-dropdownhover.min.js',
        '/js/fontawesome-all.js',
        '/js/owl.carousel.min.js',
        '/twitter/jquery.tweet.js',
        '/js/jflickrfeed.min.js',
        '/js/jquery.waypoints.min.js',
        '/js/jquery.easing.min.js',
        '/js/jquery.counterup.min.js',
        '/js/jquery.easypiechart.min.js',
        '/js/jquery.appear.js',
        '/js/wow.min.js',
        '/js/jquery.validate.min.js',
        '/js/jquery.gmap.min.js',
        '/rev-slider/revolution/js/jquery.themepunch.tools.min.js',
        '/rev-slider/revolution/js/jquery.themepunch.revolution.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js',
        '/rev-slider/revolution/js/extensions/revolution.extension.video.min.js',
        '/js/jquery.cubeportfolio.min.js',
        '/js/masonary-custom.js',
        '/js/site-custom.js',
        '/rev-slider/revolution/js/extensions/slider.js',
        '/js/main.js',
        '/js/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
