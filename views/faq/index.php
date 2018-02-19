<?php
use yii\easyii2\modules\faq\api\Faq;
use yii\easyii2\modules\page\api\Page;

$page = Page::get('page-faq');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
?>
<div class="container">
    <h1><?= $page->seo('h1', $page->title) ?></h1>
    <br/>

    <?php foreach(Faq::items() as $item) : ?>
        <p><b>Question: </b><?= $item->question ?></p>
        <blockquote><b>Answer: </b><?= $item->answer ?></blockquote>
    <?php endforeach; ?>
</div>
