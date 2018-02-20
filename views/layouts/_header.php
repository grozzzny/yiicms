<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;

/**
 * @var View $this
 */
?>

<header>
    <div class="container">
         <? NavBar::begin([
             'brandLabel' => 'Yiicms',
             'options' => ['class' => 'navbar navbar-default']
         ]);
         echo Nav::widget([
             'items' => [
                 ['label' => 'Home', 'url' => ['site/index']],
                 ['label' => 'Shop', 'url' => ['shop/index']],
                 ['label' => 'News', 'url' => ['news/index']],
                 ['label' => 'Articles', 'url' => ['articles/index']],
                 ['label' => 'Gallery', 'url' => ['gallery/index']],
                 ['label' => 'Guestbook', 'url' => ['guestbook/index']],
                 ['label' => 'FAQ', 'url' => ['faq/index']],
                 ['label' => 'Contact', 'url' => ['/contact/index']],
             ],
             'options' => ['class' => 'navbar-nav'],
        ]);
        NavBar::end();?>
    </div>
</header>
