<?php
namespace app\commands;

use grozzzny\sitemap\controllers\ConsoleController;

/**
 * CRON
 * php yii sitemap/console/update
 */
class SitemapController extends ConsoleController
{
    /**
     * Метод формирует свойство $this->data_sitemap
     *
     * data_sitemap[$object->user_id][] = [
     *       'loc' => http://www.example.com/,
     *       'lastmod' => 2005-01-01,
     *       'changefreq' => always hourly daily weekly monthly yearly never,
     *       'priority' => 0.8,
     *   ]
     */
    public function getDataSitemap()
    {
//        $this->getDataArticles();
//        $this->getDataCategories();
//        $this->getDataGallery();
    }


    public function getDataCategories()
    {
        $key_section = 'uslugi';
        $categories = \yii\easyii2\modules\article\models\Category::find()->where([
            'AND',
            ['tree' => '2'],
            ['!=', 'category_id', '2']
        ])->all();

        foreach($categories as $category){
            if(!count($category->items)){
                $loc = $this->module->domain . '/uslugi/'.$category->slug;
                $changefreq = 'monthly';
                $priority = '0.7';
                $lastmod  = $this->lastmod;
                echo $loc . PHP_EOL;
                $this->data_sitemap[$key_section][] = array(
                    'loc'           => $loc, //http://www.example.com/
                    'lastmod'       => $lastmod, //2005-01-01
                    'changefreq'    => $changefreq, //always hourly daily weekly monthly yearly never
                    'priority'      => $priority, //0.8
                );
            }else{
                $items = [];
                foreach($category->items as $child){
                    $loc = $this->module->domain . '/uslugi/'.$category->slug.'/'.$child->slug;
                    $changefreq = 'monthly';
                    $priority = '0.7';
                    $lastmod  = $this->lastmod;
                    echo $loc . PHP_EOL;
                    $this->data_sitemap[$key_section][] = array(
                        'loc'           => $loc, //http://www.example.com/
                        'lastmod'       => $lastmod, //2005-01-01
                        'changefreq'    => $changefreq, //always hourly daily weekly monthly yearly never
                        'priority'      => $priority, //0.8
                    );
                }

                $loc = $this->module->domain . '/uslugi/'.$category->slug;
                $changefreq = 'monthly';
                $priority = '0.7';
                $lastmod  = $this->lastmod;
                echo $loc . PHP_EOL;
                $this->data_sitemap[$key_section][] = array(
                    'loc'           => $loc, //http://www.example.com/
                    'lastmod'       => $lastmod, //2005-01-01
                    'changefreq'    => $changefreq, //always hourly daily weekly monthly yearly never
                    'priority'      => $priority, //0.8
                );
            }
        }
    }


    public function getDataArticles()
    {
        foreach(Article::cat('clinika')->items() as $article)
        {

            $key_section = 'clinika';

            $loc = $this->module->domain . '/clinika/'.$article->slug;
            $changefreq = 'monthly';
            $priority = '0.7';
            $lastmod  = date('Y-m-d', $article->time);

            echo $loc . PHP_EOL;

            $this->data_sitemap[$key_section][] = array(
                'loc'           => $loc, //http://www.example.com/
                'lastmod'       => $lastmod, //2005-01-01
                'changefreq'    => $changefreq, //always hourly daily weekly monthly yearly never
                'priority'      => $priority, //0.8
            );
        }
    }

    public function getDataGallery()
    {
        $items_gallery = [];
        $key_section = 'gallery';

        foreach(\yii\easyii2\modules\gallery\models\Category::tree() as $category){
            $children = $category->children;

            if(count($children) < 1){
                $loc = $this->module->domain . '/foto/'.$category->slug;
                $changefreq = 'monthly';
                $priority = '0.7';
                $lastmod  = date('Y-m-d', $category->time);
            }elseif(count($children) == 1){
                $loc = $this->module->domain . '/foto/'.$category->children[0]->slug;
                $changefreq = 'monthly';
                $priority = '0.7';
                $lastmod  = date('Y-m-d', $category->children[0]->time);
            }else{
                $items = [];
                foreach($children as $child){
                    $loc = $this->module->domain . '/foto/'.$child->slug;
                    $changefreq = 'monthly';
                    $priority = '0.7';
                    $lastmod  = date('Y-m-d', $child->time);

                    $this->data_sitemap[$key_section][] = array(
                        'loc'           => $loc, //http://www.example.com/
                        'lastmod'       => $lastmod, //2005-01-01
                        'changefreq'    => $changefreq, //always hourly daily weekly monthly yearly never
                        'priority'      => $priority, //0.8
                    );
                }

                $loc = $this->module->domain . '/foto/'.$children[0]->slug;
                $changefreq = 'monthly';
                $priority = '0.7';
                $lastmod  = date('Y-m-d', $children[0]->time);
            }

            $this->data_sitemap[$key_section][] = array(
                'loc'           => $loc, //http://www.example.com/
                'lastmod'       => $lastmod, //2005-01-01
                'changefreq'    => $changefreq, //always hourly daily weekly monthly yearly never
                'priority'      => $priority, //0.8
            );
        }
    }

}