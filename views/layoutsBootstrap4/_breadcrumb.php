<?php
use yii\web\View;
use yii\widgets\Breadcrumbs;

/**
 * @var View $this
 */
?>

<? if(isset($this->params['breadcrumbs'])):?>
<nav aria-label="breadcrumb" class="mb-3">
    <?= Breadcrumbs::widget([
        'links' => $this->params['breadcrumbs'],
        'options' => ['class' => 'breadcrumb breadcrumb-theme'],
        'tag' => 'ol',
        'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
        'activeItemTemplate' => "<li class=\"breadcrumb-item active\" aria-current=\"page\">{link}</li>\n",
    ])?>
</nav>
<? endif;?>


