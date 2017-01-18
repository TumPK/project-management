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
    	'css/pm.css',
        'css/site.css',
    	'css/datatables.bootstrap.css',
    ];
    public $js = [
    	'js/datatables.js',
    	'js/table-datatables-responsive.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
