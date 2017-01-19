<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Asset สร้างงาน layout
 * Main backend application asset bundle.
 */
class createTaskAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //BEGIN GLOBAL MANDATORY STYLES 
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700',
        'assetsThai/global/plugins/font-awesome/css/font-awesome.min.css',
        'assetsThai/global/plugins/simple-line-icons/simple-line-icons.min.css',
       'assetsThai/global/plugins/bootstrap/css/bootstrap.min.css',
        'assetsThai/global/plugins/uniform/css/uniform.default.css',
        'assetsThai/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
       //END GLOBAL MANDATORY STYLES 
        //BEGIN PAGE LEVEL PLUGINS 
       'assetsThai/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
        'assetsThai/global/plugins/morris/morris.css',
        'assetsThai/global/plugins/fullcalendar/fullcalendar.min.css',
         'assetsThai/global/plugins/jqvmap/jqvmap/jqvmap.css',
    		'assetsThai/global/plugins/select2/css/select2.min.css',
    		'assetsThai/global/plugins/select2/css/select2-bootstrap.min.csss',
        //END PAGE LEVEL PLUGINS -->
       //BEGIN THEME GLOBAL STYLES -->
        'assetsThai/global/css/components-md.min.css',
        'assetsThai/global/css/plugins-md.min.css',
        //END THEME GLOBAL STYLES -->
       //BEGIN THEME LAYOUT STYLES -->
         'assetsThai/layouts/layout4/css/layout.min.css',
         'assetsThai/layouts/layout4/css/themes/light.min.css',
         'assetsThai/layouts/layout4/css/custom.min.css',
		
        //END THEME LAYOUT STYLES -->
        

       //BEGIN PAGE LEVEL PLUGINS -->
         'assetsThai/global/plugins/datatables/datatables.min.css',
         'assetsThai/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
        //END PAGE LEVEL PLUGINS -->
		 'assetsThai/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
         'assetsThai/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
         'assetsThai/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
        'assetsThai/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
         'assetsThai/global/plugins/clockface/css/clockface.css',
   		
    ];
   public $cssOptions = ['position' => \yii\web\View::POS_HEAD];
    
    public $js = [
    		
    		//BEGIN CORE PLUGINS -->
        'assetsThai/global/plugins/jquery.min.js',
        'assetsThai/global/plugins/bootstrap/js/bootstrap.min.js',
        'assetsThai/global/plugins/js.cookie.min.js',
        'assetsThai/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
       'assetsThai/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'assetsThai/global/plugins/jquery.blockui.min.js',
        'assetsThai/global/plugins/uniform/jquery.uniform.min.js',
       'assetsThai/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
       //END CORE PLUGINS -->
        //BEGIN PAGE LEVEL PLUGINS -->
        'assetsThai/global/plugins/moment.min.js',
        'assetsThai/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        'assetsThai/global/plugins/morris/morris.min.js',
        'assetsThai/global/plugins/morris/raphael-min.js',
        'assetsThai/global/plugins/counterup/jquery.waypoints.min.js',
        'assetsThai/global/plugins/counterup/jquery.counterup.min.js',
        'assetsThai/global/plugins/amcharts/amcharts/amcharts.js',
        'assetsThai/global/plugins/amcharts/amcharts/serial.js',
        'assetsThai/global/plugins/amcharts/amcharts/pie.js',
        'assetsThai/global/plugins/amcharts/amcharts/radar.js',
        'assetsThai/global/plugins/amcharts/amcharts/themes/light.js',
        'assetsThai/global/plugins/amcharts/amcharts/themes/patterns.js',
        'assetsThai/global/plugins/amcharts/amcharts/themes/chalk.js',
        'assetsThai/global/plugins/amcharts/ammap/ammap.js',
        'assetsThai/global/plugins/amcharts/ammap/maps/js/worldLow.js',
        'assetsThai/global/plugins/amcharts/amstockcharts/amstock.js',
        'assetsThai/global/plugins/fullcalendar/fullcalendar.min.js',
       'assetsThai/global/plugins/flot/jquery.flot.min.js',
        'assetsThai/global/plugins/flot/jquery.flot.resize.min.js',
        'assetsThai/global/plugins/flot/jquery.flot.categories.min.js',
        'assetsThai/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        'assetsThai/global/plugins/jquery.sparkline.min.js',
       'assetsThai/global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        'assetsThai/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'assetsThai/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'assetsThai/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'assetsThai/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'assetsThai/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'assetsThai/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
         'assetsThai/global/plugins/select2/js/select2.full.min.js',
        'assetsThai/global/plugins/jquery-validation/js/jquery.validate.min.js',
       'assetsThai/global/plugins/jquery-validation/js/additional-methods.min.js',
       'assetsThai/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js',
       //END PAGE LEVEL PLUGINS -->
        //BEGIN THEME GLOBAL SCRIPTS -->
        'assetsThai/global/scripts/app.min.js',
        //END THEME GLOBAL SCRIPTS -->
        //BEGIN PAGE LEVEL SCRIPTS -->
       'assetsThai/pages/scripts/dashboard.min.js',
		'assetsThai/pages/scripts/form-samples.min.js',
    		'assetsThai/pages/scripts/form-wizard.min.js',
        //END PAGE LEVEL SCRIPTS -->
        //BEGIN THEME LAYOUT SCRIPTS -->
        'assetsThai/layouts/layout4/scripts/layout.min.js',
        'assetsThai/layouts/layout4/scripts/demo.min.js',
       'assetsThai/layouts/global/scripts/quick-sidebar.min.js',

        'assetsThai/global/plugins/datatables/datatables.min.js',
        'assetsThai/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',

        'assetsThai/pages/scripts/table-datatables-responsive.js',
        //END THEME LAYOUT SCRIPTS -->
        'assetsThai/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
       //END PAGE LEVEL PLUGINS -->
       //BEGIN PAGE LEVEL SCRIPTS -->
        'assetsThai/pages/scripts/components-date-time-pickers.min.js',
		'assetsThai/pages/scripts/form-samples.min.js',
    		
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $depends = [
       'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
    ];
}
