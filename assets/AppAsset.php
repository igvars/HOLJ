<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
        'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/material-kit.css',
        'css/font-awesome.min.css',
        'css/main.css',
//        'css/site.css'
    ];
    public $js = [
        'js/jquery-3.1.0.min.js',
        'js/bootstrap.js',
        'js/slick.min.js',
        'js/material.min.js',
        'js/nouislider.min.js',
        'js/bootstrap-datepicker.js',
        'js/material-kit.js',
        'js/general-scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
