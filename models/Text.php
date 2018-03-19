<?php
namespace app\models;


use grozzzny\lang\models\Lang;

class Text extends \yii\easyii2\modules\text\models\Text
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_texts' : 'en_easyii2_texts' ;
    }
}