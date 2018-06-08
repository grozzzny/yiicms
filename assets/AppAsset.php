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
        //'css/site.css',

        //Bootstrap 4
        'css/theme/style.css',
    ];
    public $js = [
        'js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',

        //Bootstrap 3
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',

        //Bootstrap 4
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\bootstrap4\Bootstrap4PluginAsset',

        //Material Design for Bootstrap 4
        'grozzzny\depends\mdbootstrap\MDBootstrapAsset',
        'grozzzny\depends\mdbootstrap\MDBootstrapPluginAsset',

        'grozzzny\depends\fontawesome5\FontAwesome5Asset',
        'grozzzny\depends\jquery_migrate\JqueryMigrateAsset',
        'grozzzny\depends\font_awesome\FontAwesomeAsset',
        'grozzzny\depends\owl_carousel\OwlAsset',
        'grozzzny\depends\sticky\StickyAsset',
        'grozzzny\depends\scrollreveal\ScrollRevalAsset',
        //'grozzzny\depends\wow_animations\WowAnimationsAsset',
        'grozzzny\depends\fancybox\FancyboxAsset',
    ];
}
