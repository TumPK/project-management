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
    	//'css/bootstrap.min.css',
    	'css/datatables.bootstrap.css',
    	'css/bootstrap-toggle.css',
    ];
    public $js = [
    	//'js/jquery-2.1.1.min.js',
    	'js/datatables.js',
    	//'js/bootstrap.min.js',
    	'js/table-datatables-responsive.js',
    	'js/bootstrap-toggle.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
