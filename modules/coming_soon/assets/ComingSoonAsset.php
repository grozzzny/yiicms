<?php
namespace app\modules\coming_soon\assets;

use yii\web\AssetBundle;

class ComingSoonAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/coming_soon/assets';

    public $css = [
        'css/light_blue.css',
        'css/magnific-popup.css',
        'css/slick.css',
        'css/style.css',
        'css/typography-default.css',
    ];

    public $js = [
        'js/coming.soon.config.js',
        'js/jquery.countdown.min.js',
        'js/jquery.countTo.js',
        'js/jquery.magnific-popup.min.js',
        'js/slick.min.js',
        'js/template.js',
    ];

    public $depends = [
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\bootstrap4\Bootstrap4PluginAsset',
        'yii\web\JqueryAsset',
        'grozzzny\depends\font_awesome\FontAwesomeAsset',
        'grozzzny\depends\wow_animations\WowAnimationsAsset',
        'grozzzny\depends\waypoints\WaypointsAsset',
    ];
}
