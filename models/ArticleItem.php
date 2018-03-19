<?php


namespace app\models;


use grozzzny\lang\models\Lang;
use yii\easyii2\modules\article\models\Item;

class ArticleItem extends Item
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_article_items' : 'en_easyii2_article_items' ;
    }
}