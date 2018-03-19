<?php


namespace app\models;


use grozzzny\lang\models\Lang;

/**
 * Class News
 * @package app\models
 *
 * @property-read string $date
 */
class News extends \yii\easyii2\modules\news\models\News
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_news' : 'en_easyii2_news' ;
    }

    public function getDate()
    {
        return date('d.m.Y', $this->time);
    }
}