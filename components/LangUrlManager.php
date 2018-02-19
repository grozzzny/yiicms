<?php


namespace app\components;

use app\models\Category;
use app\models\Company;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\UrlManager;
use app\modules\lang\models\Lang;

/**
 * LangUrlManager Component
 * @package app\components
 *
 * @property-read string $subdomain
 * @property-read string $domain
 * @property-read string $protocol
 * @property-read string $urlDomain
 */
class LangUrlManager extends UrlManager
{
    public function createUrl($params)
    {
        if (isset($params['lang_id'])) {
            //Если указан идентификатор языка, то делаем попытку найти язык в БД,
            //иначе работаем с языком по умолчанию
            $lang = Lang::findOne($params['lang_id']);
            if ($lang === null) {
                $lang = Lang::getDefaultLang();
            }
            unset($params['lang_id']);
        } else {
            //Если не указан параметр языка, то работаем с текущим языком
            $lang = Lang::getCurrent();
        }

        //Получаем сформированный URL(без префикса идентификатора языка)
        $url = parent::createUrl($params);

        //Добавляем к URL префикс - буквенный идентификатор языка
        if ($url == '/') {
            return '/' . $lang->url;
        } else {
            return '/' . $lang->url . $url;
        }
    }
}