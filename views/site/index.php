<?php

use grozzzny\widgets\seo\Seo;
use yii\easyii2\modules\article\api\Article;
use yii\easyii2\modules\carousel\api\Carousel;
use yii\easyii2\modules\gallery\api\Gallery;
use yii\easyii2\modules\guestbook\api\Guestbook;
use yii\easyii2\modules\news\api\News;
use yii\easyii2\modules\news\api\NewsObject;
use yii\easyii2\modules\page\api\Page;
use yii\easyii2\modules\text\api\Text;
use yii\helpers\Html;
use yii\web\View;

/**
 * @var \yii\web\View $this
 * @var NewsObject $item
 */

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);

Seo::widget([
    'title' => $this->title,
    'description' => $page->seo('description', ''),
    'image' => Yii::$app->urlManager->baseUrl.'/images/noimage.jpg',
    'keywords' => $page->seo('keywords', ''),
]);
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

<div class="container">
    <? $this->on(View::EVENT_BEGIN_BODY, function () { echo Yii::$app->view->render('_modal');});?>
    <a href="#modal-callback" data-toggle="modal" class="btn btn-theme"><?= Yii::t('app', 'Contact us')?></a>
</div>

<div class="container text-center">
    <div class="thumbnail" style="margin: 50px 0;">
        <img src="https://placehold.it/600x300&text=600x300" alt="placehold.it">
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

        <div class="right-side-container">

            <h2>Custom content</h2>
            <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail animated fadeIn wow" data-wow-duration="1s" data-wow-delay="0s"  data-wow-offset="200">
                        <img src="/images/nophoto.png" alt="">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div  class="thumbnail animated fadeIn wow" data-wow-duration="1s" data-wow-delay="0.5s"  data-wow-offset="200">
                        <img src="/images/nophoto.png" alt="">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail animated fadeIn wow" data-wow-duration="1s" data-wow-delay="1s"  data-wow-offset="200">
                        <img src="/images/nophoto.png" alt="">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>