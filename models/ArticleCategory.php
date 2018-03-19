<?php


namespace app\models;


use grozzzny\lang\models\Lang;

class ArticleCategory extends \yii\easyii2\modules\article\models\Category
{
    public static function tableName()
    {
        return Lang::getCurrent()->url == 'ru' ? 'easyii2_article_categories' : 'en_easyii2_article_categories' ;
    }
}