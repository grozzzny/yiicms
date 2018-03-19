<?php
namespace app\models;

use grozzzny\lang\models\Lang;

class Page extends \yii\easyii2\modules\page\models\Page
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_pages' : 'en_easyii2_pages' ;
    }
}