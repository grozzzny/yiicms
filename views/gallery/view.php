<?php
/**
 * @var \yii\easyii2\modules\gallery\api\CategoryObject $album
 * @var \yii\easyii2\modules\gallery\api\PhotoObject[] $photos
 */
$this->title = $album->seo('title', $album->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Gallery', 'url' => ['gallery/index']];
$this->params['breadcrumbs'][] = $album->model->title;
?>
<div class="container">
    <h1><?= $album->seo('h1', $album->title) ?></h1>

    <?php if(count($photos)) : ?>
        <div>
            <h4>Photos</h4>
            <div class="gallary row">
                <? foreach ($photos as $photo):?>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <a class="item item-gallary" href="<?=$photo->thumb(900)?>" rel="gallery" data-fancybox="group" data-caption="<?=$photo->description?>">
                            <img src="<?=$photo->thumb(300, 250, true)?>" alt="<?=$photo->description?>" />
                        </a>
                    </div>
                <? endforeach;?>
            </div>
        </div>
        <br/>
    <?php else : ?>
        <p>Album is empty.</p>
    <?php endif; ?>
    <?= $album->pages(['options' => ['class' => 'pagination pagination-theme']]) ?>
</div>