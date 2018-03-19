<?php


namespace app\models;


use grozzzny\lang\models\Lang;

class ArticleItem extends \yii\easyii2\modules\article\models\Item
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_article_items' : 'en_easyii2_article_items' ;
    }
}