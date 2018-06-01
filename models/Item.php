<?php
namespace app\models;

use yii\base\Exception;
use yii\helpers\Url;


/**
 * Class Item
 * @package app\models
 * @property-read DataProperties $dataProperties
 */
class Item extends \grozzzny\catalog\models\Item implements CatalogInterface
{
    public $category_slug;

    public function getMainCategorySlug()
    {
        if(empty($this->category_slug)) throw new Exception('Empty variable $category_slug');

        return $this->category_slug;
    }

    public function getPublicLink($category_slug = '')
    {
        if(empty($category_slug) || $category_slug == $this->mainCategorySlug) {
            return Url::to(['/'.$this->mainCategorySlug.'/view/'.$this->slug]);
        } else {
            return Url::to(['/'.$this->mainCategorySlug.'/'.$category_slug.'/'.$this->slug]);
        }
    }
}