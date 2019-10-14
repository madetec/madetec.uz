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
        'fonts/css/all.min.css',
        'css/aos.css',
        'vendor/animate.min.css',
        'vendor/owl.carousel.css',
        'vendor/owl.theme.default.css',
        'css/style.css',
        'css/media-screen.css',
        
    ];
    public $js = [
        'vendor/bootstrap.min.js',
        'vendor/owl.carousel.js',
        'vendor/scrollIt.min.js',
        'js/aos.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
