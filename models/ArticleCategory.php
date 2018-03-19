<?php


namespace app\models;


use grozzzny\lang\models\Lang;
use yii\easyii2\modules\article\models\Category;

class ArticleCategory extends Category
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_article_categories' : 'en_easyii2_article_categories' ;
    }
}