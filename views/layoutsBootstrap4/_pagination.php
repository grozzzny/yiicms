<?php
use yii\web\View;
use yii\widgets\LinkPager;

/**
 * @var View $this
 * @var \yii\data\Pagination $pagination
 */
?>

<nav aria-label="Page navigation">
    <?= LinkPager::widget([
        'pagination' => $pagination,
        'linkContainerOptions' => ['class' => 'page-item'],
        'linkOptions' => ['class' => 'page-link'],
        'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link']
    ]) ?>
</nav>


