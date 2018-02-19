<?php
use yii\easyii2\modules\article\api\Article;
use yii\easyii2\modules\carousel\api\Carousel;
use yii\easyii2\modules\gallery\api\Gallery;
use yii\easyii2\modules\guestbook\api\Guestbook;
use yii\easyii2\modules\news\api\News;
use yii\easyii2\modules\news\api\NewsObject;
use yii\easyii2\modules\page\api\Page;
use yii\easyii2\modules\text\api\Text;
use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var NewsObject $item
 */

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);
?>

<div class="container">

    <section class="main-slider owl-carousel owl-theme">
        <? foreach(Carousel::items() as $item): ?>
            <div class="item">
                <a href="<?= empty($item->link) ? 'javascript:void(0);' : $item->link ?>">
                    <img src="<?=$item->thumb(1200, 500)?>" alt="<?= $item->title?>">
                </a>
            </div>
        <? endforeach;?>
    </section>

    <div class="text-center">
        <h1><?= Text::get('index-welcome-title') ?></h1>
        <p><?= $page->text ?></p>
    </div>

</div>

<div class="container container-two-column">
    <div class="left-side">
        <div class="sidebar-left">
            <div class="list-group">

                <a href="#" class="list-group-item list-group-item-action">
                    Submenu
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Submenu
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Submenu
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Submenu
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    Submenu
                </a>

            </div>

        </div>
    </div>
    <div class="right-side">

    </div>
</div>