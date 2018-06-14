<?php
namespace app\commands;

use app\models\Category;
use app\models\Item;
use grozzzny\sitemap\controllers\ConsoleController;
use grozzzny\sitemap\models\Sitemap;

/**
 * Console
 * php yii sitemap/console/update
 *
 * or
 *
 * crontab -e
 * 0 5 * * * /opt/php7.0/bin/php /home/c/cd51932/public_html/yii sitemap/console/update
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