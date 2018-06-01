<?php
namespace app\models;

use yii\base\Exception;
use yii\helpers\Url;

/**
 * Class Category
 * @package app\models
 */
class Category extends \grozzzny\catalog\models\Category implements CatalogInterface
{
    public $category_slug;

    public function getMainCategorySlug()
    {
        if(empty($this->category_slug) && get_called_class() != 'app\models\Category') throw new Exception('Empty variable $category_slug');

        return $this->category_slug;
    }

    public function getLink()
    {
        if ($this->slug == $this->mainCategorySlug){
            return Url::to(['/' . $this->mainCategorySlug]);
        }

        return Url::to(['/'.$this->mainCategorySlug.'/' . $this->slug]);
    }
}