<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap.min.css',
        'fonts/css/all.css',
        'https://fonts.googleapis.com/css?family=Rubik:400,500,700,900',
        'https://fonts.googleapis.com/css?family=Open+Sans',
        'vendor/magnific-popup.css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'vendor/animate.css',
        'vendor/owl.carousel.css',
        'vendor/owl.theme.default.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'vendor/popper.min.js',
        'vendor/bootstrap.min.js',
        'vendor/jquery.magnific-popup.min.js',
        'vendor/owl.carousel.js',
        'vendor/scrollIt.min.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
