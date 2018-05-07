<?php
namespace app\commands;

use app\models\Category;
use app\models\Item;
use grozzzny\sitemap\controllers\ConsoleController;
use grozzzny\sitemap\models\Sitemap;

/**
 * CRON
 * php yii sitemap/console/update
 *
 * or
 *
 * After save
 * WebConsole::console()->runAction('sitemap/console/update');
 */
class SitemapController extends ConsoleController
{

    public function getDataSitemap()
    {
//        $this->getDataCatalog();
    }

    public function getDataCatalog()
    {
        $items = Item::find()
            ->statusOn()
            ->category(Category::findOne(['slug' => 'drova']))
            ->all();

        foreach($items as $item){
            $this->data_sitemap['drova'][] = array(
                'loc'           => $this->module->domain . '/firewood/view/' . $item->slug,
                'lastmod'       => Sitemap::lastmodFormat($item->updated_at),
                'changefreq'    => Sitemap::CHANGEFREQ_MONTHLY,
                'priority'      => Sitemap::PRIORITY_60,
            );
        }
    }
}