<?php
namespace app\modules\coming_soon;

use yii\base\Module;
use yii\helpers\ArrayHelper;

class ComingSoonModule extends Module
{
    public $layoutPath = '@app/modules/coming_soon/layouts';

    public $layout = 'main';

    private $_settings = [
        'logo' => '',
        'background' => '',
        'title' => 'Multipurpose HTML5 Template',
        'heading' => 'COMING SOON',
        'descriptions' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure perspiciatis quod, voluptatum, porro pariatur facere id in unde obcaecati nobis sapiente cupiditate ipsa veniam quam natus voluptate ipsum minima soluta!',
        'address' => 'One infinity loop, 54100',
        'phone' => '+00 1234567890',
        'email' => 'youremail@domain.com',
        'social' => [
//            [
//                'name' => 'facebook',
//                'link' => 'https://www.facebook.com/Бесплатная-газета-Вечерний-трамвай-329818227062393/',
//                'icon' => '<i class="fa fa-facebook"></i>',
//            ],
        ],
        'expiryDate' => '2019/10/10',
        'copyright' => 'The Project. All rights reserved.',
    ];

    public $settings = [

    ];

    public function getSettings()
    {
        return ArrayHelper::merge($this->_settings, $this->settings);
    }
}