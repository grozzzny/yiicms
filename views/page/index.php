<?php

use yii\easyii2\modules\page\api\Page;

$page = Page::get('page-' . Yii::$app->request->get('page_slug'));

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
?>
<div class="container-fluid">

    <div class="row">

        <div class="col-lg-10 col-lg-offset-1">

            <h1 class="main-heading">
                <?= $page->seo('h1', $page->title) ?>
            </h1>

            <div class="text-content">
                <?= $page->text ?>
            </div>

        </div>

    </div>

</div>