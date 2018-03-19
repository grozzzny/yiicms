<?php


namespace app\models;


use grozzzny\lang\models\Lang;

class SeoText extends \yii\easyii2\models\SeoText
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_seotext' : 'en_easyii2_seotext' ;
    }
}