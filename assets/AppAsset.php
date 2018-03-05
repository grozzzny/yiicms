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
        'css/site.css',
    ];
    public $js = [
        'js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'grozzzny\depends\jquery_migrate\JqueryMigrateAsset',
        'grozzzny\depends\font_awesome\FontAwesomeAsset',
        'grozzzny\depends\owl_carousel\OwlAsset',
        'grozzzny\depends\sticky\StickyAsset',
        'grozzzny\depends\scrollreveal\ScrollRevalAsset',
        'grozzzny\depends\wow_animations\WowAnimationsAsset',
        'grozzzny\depends\fancybox\FancyboxAsset',
    ];
}
