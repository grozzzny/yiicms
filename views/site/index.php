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

<section class="main-slider owl-carousel owl-theme">
    <? foreach(Carousel::items() as $item): ?>
        <div class="item">
            <a href="<?= empty($item->link) ? 'javascript:void(0);' : $item->link ?>">
                <img src="<?=$item->thumb(1900, 600)?>" alt="<?= $item->title?>">
                <div class="absolute-layer">
                    <div class="container">
                        <div class="title"><?= $item->title?></div>
                        <div class="text"><?= $item->text?></div>
                    </div>
                </div>
            </a>
        </div>
    <? endforeach;?>
</section>

<div class="container">

    <div class="text-center">
        <h1><?= Text::get('index-welcome-title') ?></h1>
        <p><?= $page->text ?></p>
    </div>

</div>

<div class="container">

            <h2>Custom content</h2>
            <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail animated fadeIn wow" data-wow-duration="1s" data-wow-delay="0s"  data-wow-offset="200">
                        <img src="/images/nophoto.jpg" alt="">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div  class="thumbnail animated fadeIn wow" data-wow-duration="1s" data-wow-delay="0.5s"  data-wow-offset="200">
                        <img src="/images/nophoto.jpg" alt="">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail animated fadeIn wow" data-wow-duration="1s" data-wow-delay="1s"  data-wow-offset="200">
                        <img src="/images/nophoto.jpg" alt="">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
